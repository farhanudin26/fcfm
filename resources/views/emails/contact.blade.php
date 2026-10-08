<div style="font-family: Arial, sans-serif; background-color: #f7fafc; margin: 0; padding: 20px;">
    <div style="max-width: 600px; margin: 0 auto; background: #ffffff; border-radius: 8px; overflow: hidden; box-shadow: 0 4px 6px rgba(0,0,0,0.05); border: 1px solid #e2e8f0;">

        <!-- Header Logo -->
        <div style="background-color: #ffffff; padding: 24px; text-align: center; border-bottom: 3px solid #0056b3;">
            <img src="https://beta.fcfm.sg/assets/img/uploads/2025/09/horizontal-fcfm-logo.png" alt="FCFM Logo" style="max-width: 220px; height: auto;">
        </div>

        <!-- Content Body -->
        <div style="padding: 24px;">
            <div style="font-size: 18px; font-weight: bold; color: #1a202c; margin-bottom: 16px; border-bottom: 2px solid #edf2f7; padding-bottom: 8px;">
                New Message from Contact Form
            </div>

            <table style="width: 100%; border-collapse: collapse; font-size: 14px;">
                <tbody>
                    <tr>
                        <td style="padding: 10px 12px; font-weight: bold; width: 30%; color: #4a5568; border-bottom: 1px solid #e2e8f0; vertical-align: top;">Name</td>
                        <td style="padding: 10px 12px; color: #2d3748; border-bottom: 1px solid #e2e8f0; vertical-align: top;">{{ $data['name'] }}</td>
                    </tr>
                    <tr>
                        <td style="padding: 10px 12px; font-weight: bold; color: #4a5568; border-bottom: 1px solid #e2e8f0; vertical-align: top;">Email</td>
                        <td style="padding: 10px 12px; color: #2d3748; border-bottom: 1px solid #e2e8f0; vertical-align: top;">{{ $data['email'] }}</td>
                    </tr>
                    <tr>
                        <td style="padding: 10px 12px; font-weight: bold; color: #4a5568; border-bottom: 1px solid #e2e8f0; vertical-align: top;">Phone</td>
                        <td style="padding: 10px 12px; color: #2d3748; border-bottom: 1px solid #e2e8f0; vertical-align: top;">{{ $data['phone'] ?: '-' }}</td>
                    </tr>
                    <tr>
                        <td style="padding: 10px 12px; font-weight: bold; color: #4a5568; border-bottom: 1px solid #e2e8f0; vertical-align: top;">Subject</td>
                        <td style="padding: 10px 12px; color: #2d3748; border-bottom: 1px solid #e2e8f0; vertical-align: top;">{{ $data['subject'] ?: '-' }}</td>
                    </tr>
                    <tr>
                        <td style="padding: 10px 12px; font-weight: bold; color: #4a5568; border-bottom: 1px solid #e2e8f0; vertical-align: top;">Message</td>
                        <td style="padding: 10px 12px; color: #2d3748; border-bottom: 1px solid #e2e8f0; vertical-align: top;">{!! nl2br(e($data['message'])) !!}</td>
                    </tr>
                </tbody>
            </table>
        </div>

        <!-- Footer -->
        <div style="background-color: #f7fafc; padding: 16px; text-align: center; font-size: 12px; color: #a0aec0; border-top: 1px solid #e2e8f0;">
            &copy; {{ date('Y') }} Fresh Cleaning Facilities Management. All rights reserved.
        </div>

    </div>
</div>
