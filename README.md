# iek-delta-simple-feedback-collector
# Simple Feedback Collector

## Description
This is a basic web application designed to collect user feedback through a simple form. It is built using HTML, CSS, JavaScript, and PHP. Users can submit their feedback, which is then displayed on the page.

---

## How to Use

1. Open `index.php` in your browser.
2. Fill in the feedback form:
   - Name (optional)
   - Email (optional)
   - Message (required)
3. Submit the form.
4. The feedback is sent to the server via `submit.php` and stored in `feedback.txt`.
5. Previous feedback entries are displayed below the form.


---

## Technologies Used

- **HTML** – Structure of the feedback form.
- **CSS** – Styling and layout.
- **JavaScript** – Client-side validation (e.g., checking if the message field is not empty).
- **PHP** – Server-side processing and storage of feedback in `feedback.txt`.

---
 
---

## Running the PHP Server Locally

1. **Navigate to the project directory**:
2. **Open your terminal or command prompt**.

Start the PHP server using the following command:
```cmd
php -S localhost:8000
```
Open your browser and go to:

```
http://localhost:8000/index.php
```
You should see the index.php page. Submitting the form will now trigger the submit.php script, and feedback will be saved in feedback.txt.
