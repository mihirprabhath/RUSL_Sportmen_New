# Sportsmen App

The **Sportsmen App** is a web-based application designed to manage sports-related activities efficiently. It offers a range of features for athletes, coaches, and administrators to streamline operations.

## Features

- **User Registration & Login**
- **Admin Dashboard**
- **User & Role Management**
- **Event & Tournament Management**
- **Product & T-Shirt Sales Management**
- **Magazine & News Updates**
- **Voting System for Sports Awards**
- **E-mail Approval for New Users**

## Future Developments

- Community Forum
- Event Calendar
- Mobile Application
- Online Payment Integration
- AI-Powered Features
- Multi-Language Support

## Technologies Used

- **Frontend:** Tailwind CSS, Livewire
- **Backend:** Laravel
- **Database:** MySQL

## Installation

### Prerequisites
- PHP 8+
- Composer
- Laravel 9+
- MySQL
- Node.js & npm (for frontend dependencies)

### Setup Instructions

1. Clone the repository:
   ```sh
   git clone https://github.com/your-username/sportsmen-app.git
   cd sportsmen-app
   ```

2. Install dependencies:
   ```sh
   composer install
   npm install && npm run dev
   ```

3. Configure environment variables:
   ```sh
   cp .env.example .env
   php artisan key:generate
   ```
   Update `.env` with your database credentials.

4. Run database migrations:
   ```sh
   php artisan migrate --seed
   ```

5. Start the development server:
   ```sh
   php artisan serve
   ```

## Usage

- Access the application at `http://127.0.0.1:8000`
- Register or log in to access the dashboard
- Admin users can manage events, products, and users

## Contribution

Feel free to fork this repository and submit pull requests for improvements!

## License

This project is open-source and available under the [MIT License](LICENSE).
