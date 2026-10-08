<?php

namespace App\Http\Controllers;

use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;

class QuoteRequestController extends Controller
{
    public function store(Request $request): JsonResponse
    {
        $facilityTypes = [
            'Office',
            'Warehouse / Industrial',
            'School / Institution / Childcare',
            'Church',
            'Hospital / Clinic / Dental / Nursing Home / Care Facility',
            'F&B',
            'Studio / Gym',
            'Condominium / Apartment Complex',
            'Retail',
            'Shopping Mall',
            'Hotel',
            'Others',
        ];

        $validated = $request->validate([
            'company_name'             => ['required', 'string', 'max:255'],
            'facility_type'            => ['required', 'in:' . implode(',', $facilityTypes)],
            'company_address'          => ['required', 'string', 'max:1000'],
            'representative_name'      => ['required', 'string', 'max:255'],
            'contact_number'           => ['required', 'string', 'max:30'],
            'email_address'            => ['required', 'email', 'max:255'],
            'start_date'               => ['required', 'date', 'after_or_equal:today'],
            'estimated_budget'         => ['nullable', 'string', 'max:100'],
            'cleaning_days_per_week'   => ['required', 'integer', 'between:1,7'],
            'hours_per_session'        => ['required', 'numeric', 'min:0.5', 'max:24'],
            'cleaners_required'        => ['nullable', 'integer', 'min:1'],
            'preferred_cleaning_hours' => ['required', 'string', 'max:255'],
            'special_requirements'     => ['nullable', 'string', 'max:2000'],
        ]);

        $to = env('QUOTE_NOTIFY_EMAIL', 'hannstars79@gmail.com');

        $labels = [
            'company_name'             => 'Name of Company',
            'facility_type'            => 'Type of Facility',
            'company_address'          => 'Address of Company',
            'representative_name'      => 'Name of Representative',
            'contact_number'           => 'Contact Number',
            'email_address'            => 'E-mail Address',
            'start_date'               => 'Estimated Start Date',
            'estimated_budget'         => 'Estimated Budget per month',
            'cleaning_days_per_week'   => 'Cleaning days per week',
            'hours_per_session'        => 'Hours per cleaning session',
            'cleaners_required'        => 'No. of cleaners required',
            'preferred_cleaning_hours' => 'Preferred cleaning hours',
            'special_requirements'     => 'Special requirements',
        ];

        // Template HTML Email
        $logoUrl = 'https://beta.fcfm.sg/assets/img/uploads/2025/09/horizontal-fcfm-logo.png';

        $rows = '';
        foreach ($labels as $key => $label) {
            $value = nl2br(e($validated[$key] ?? '-'));
            $rows .= "
                <tr>
                    <td style='padding: 10px 12px; font-weight: bold; border-bottom: 1px solid #e2e8f0; width: 40%; color: #4a5568;'>{$label}</td>
                    <td style='padding: 10px 12px; border-bottom: 1px solid #e2e8f0; color: #2d3748;'>{$value}</td>
                </tr>";
        }

        $htmlContent = "
            <!DOCTYPE html>
            <html>
            <head>
                <meta charset='utf-8'>
                <style>
                    body { font-family: Arial, sans-serif; background-color: #f7fafc; margin: 0; padding: 20px; }
                    .container { max-width: 600px; margin: 0 auto; background: #ffffff; border-radius: 8px; overflow: hidden; box-shadow: 0 4px 6px rgba(0,0,0,0.05); border: 1px solid #e2e8f0; }
                    .header { background-color: #ffffff; padding: 24px; text-align: center; border-bottom: 3px solid #0056b3; }
                    .header img { max-width: 220px; height: auto; }
                    .content { padding: 24px; }
                    .title { font-size: 18px; font-weight: bold; color: #1a202c; margin-bottom: 16px; border-bottom: 2px solid #edf2f7; padding-bottom: 8px; }
                    table { width: 100%; border-collapse: collapse; font-size: 14px; }
                    .footer { background-color: #f7fafc; padding: 16px; text-align: center; font-size: 12px; color: #a0aec0; border-top: 1px solid #e2e8f0; }
                </style>
            </head>
            <body>
                <div class='container'>
                    <div class='header'>
                        <img src='{$logoUrl}' alt='FCFM Logo'>
                    </div>
                    <div class='content'>
                        <div class='title'>New Quote Request Received</div>
                        <table>
                            <tbody>
                                {$rows}
                            </tbody>
                        </table>
                    </div>
                    <div class='footer'>
                        &copy; " . date('Y') . " Fresh Cleaning Facilities Management. All rights reserved.
                    </div>
                </div>
            </body>
            </html>
        ";

        try {
            Mail::html($htmlContent, function ($message) use ($to, $validated) {
                $message->to($to)
                    ->replyTo($validated['email_address'], $validated['representative_name'])
                    ->subject('New Quote Request - ' . $validated['company_name']);
            });
        } catch (\Throwable $e) {
            Log::error('Gagal kirim email quote: ' . $e->getMessage(), $validated);

            return response()->json([
                'success' => false,
                'message' => 'We could not send your request right now. Please try again later.',
            ], 500);
        }

        return response()->json([
            'success' => true,
            'message' => 'Thank you! Your quote request has been submitted. We will contact you shortly.',
        ], 201);
    }
}
