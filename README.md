##Doctor-Patient Portal
A PHP-based web platform developed by Aishani Singh during an internship at Duke Infosys. It enhances healthcare management, enabling doctors to manage appointments and patients to book or modify appointments. See We_Learn_for_the_future.pdf.pdf for design details.
Features

Home Page: Welcome page with navigation.
Signup/Signin: User registration and login (First Name, Email, Password, etc.).
Dashboard: Doctor interface for tracking appointments (e.g., 0 new, 11 approved, 3 canceled).
Appointment Booking: Form for patients to schedule appointments.
Specialty Pages: Info on medical fields (e.g., Cardiac Sciences).

Technologies

PHP: Backend logic.
MySQL: Database.
HTML/CSS/JavaScript: Frontend.
Bootstrap: Responsive design (assumed).

Directory Structure
doctor-patient-portal/
├── header/              # Header files
├── slider/              # Slider files
├── 1.png                # Image file
├── allappointments.php  # All appointments view
├── appointment.php      # Appointment booking
├── approved_data.php    # Approved appointments
├── cancel_data.php      # Canceled appointments
├── config.php           # Database config
├── dashboard.php        # Doctor dashboard
├── doc.jpg              # Image file
├── doc2.png             # Image file
├── handle_action.php    # Action handler
├── headerall.php        # Header include
├── homepage.php         # Home page
├── newappointment.php   # New appointment form
├── README.md            # This file
├── sidebarandnav.php    # Sidebar/navigation
├── signup.php           # Signup form
├── signup1.php          # Additional signup logic
├── style.css            # Custom CSS
└── We_Learn_for_the_future.pdf # Presentation

Installation

Clone the Repository:git clone https://github.com/your-username/doctor-patient-portal.git
cd doctor-patient-portal


Set Up MySQL:
Create a database: CREATE DATABASE doctor_patient;
Update config.php with your MySQL credentials.


Configure Web Server:
Use XAMPP/WAMP, place in htdocs.


Access:
Open http://localhost/doctor-patient-portal/homepage.php.



Usage

Home: Visit homepage.php for the welcome page.
Signup: Register at signup.php.
Signin: Log in via signin.php (assumed based on context).
Dashboard: Doctors use dashboard.php to manage appointments.
Appointments: Book via appointment.php or newappointment.php.

Presentation
We_Learn_for_the_future.pdf includes UI screenshots and feature details.
Contributing
Fork, branch, commit, and submit a pull request.

