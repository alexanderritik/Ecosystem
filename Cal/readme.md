# Cal.com

Cal.com is an open-source scheduling tool that allows you to manage and schedule meetings efficiently. It provides a user-friendly interface and a variety of features to streamline the process of booking appointments and managing your calendar.

## Features

- **Customizable Booking Pages**: Create personalized booking pages to match your brand and preferences.
- **Multiple Calendar Integrations**: Sync with Google Calendar, Outlook, and other popular calendar services.
- **Automated Reminders**: Send automated email and SMS reminders to reduce no-shows.
- **Time Zone Detection**: Automatically detect and adjust for different time zones.
- **Group Scheduling**: Schedule meetings with multiple participants easily.
- **API Access**: Integrate Cal.com with your existing systems using their robust API.

## How to Host Cal.com on a VPS

1. **Choose a VPS Provider**: Select a VPS provider such as DigitalOcean, AWS, or Linode.
2. **Set Up Your VPS**: Create a new VPS instance and configure it with your preferred operating system (e.g., Ubuntu).
3. **Install Dependencies**: Ensure you have Node.js, npm, and Docker installed on your VPS.
4. **Clone the Repository**: Clone the Cal.com repository from GitHub to your VPS.
    ```sh
    git clone https://github.com/calcom/cal.com.git
    cd cal.com
    ```
5. **Configure Environment Variables**: Set up the necessary environment variables as per the documentation.
6. **Build and Run**: Use Docker to build and run the application.
    ```sh
    docker-compose up --build
    ```
7. **Access Your Instance**: Once the application is running, you can access it via your VPS's IP address.

## Alternatives to Cal.com

If you are looking for alternatives to Cal.com for meeting scheduling, consider the following options:

- **Calendly**: A popular scheduling tool with a wide range of integrations and features.
- **Acuity Scheduling**: Offers robust scheduling capabilities and customization options.
- **Doodle**: Simplifies group scheduling with easy-to-use polling features.
- **Microsoft Bookings**: Integrated with Microsoft 365, suitable for businesses using the Microsoft ecosystem.

Each of these alternatives offers unique features and capabilities, so you can choose the one that best fits your needs.