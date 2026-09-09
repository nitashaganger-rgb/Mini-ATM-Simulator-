# Mini ATM Simulator

## Student Details

-   **Name:** Nitasha Ganger
-   **Roll Number:** 2443003
-   **Course:** BCA
-   **Project Name:** Mini ATM Simulator

## 1. Project Objective

The objective of this project is to develop a simple Mini ATM Simulator
using HTML, CSS and PHP.

The system allows the user to: - Check account balance - Deposit money -
Withdraw money - Exit the ATM

No database is used in this project. The balance is maintained during
the current program session.

## 2. Features

-   Balance Inquiry
-   Deposit Money
-   Withdraw Money
-   Insufficient Balance checking
-   Exit option
-   Updated balance after each transaction
-   Simple and user-friendly interface
-   No database connectivity

## 3. Technologies Used

-   HTML
-   CSS
-   PHP

## 4. PHP Concepts Used

-   Variables
-   `if` statement
-   `else if`
-   `if-else`
-   `$_POST`
-   `$_SESSION`
-   `isset()`
-   Arithmetic operators
-   `echo`

## 5. Algorithm

1.  Start the program.
2.  Start the PHP session.
3.  Set the initial balance to ₹10000.
4.  Display the ATM menu.
5.  Take the user's choice.
6.  If the choice is 1, display the current balance.
7.  If the choice is 2, add the entered amount to the balance.
8.  If the choice is 3, check the balance and withdraw the amount if
    sufficient.
9.  If the balance is not sufficient, display "Insufficient Balance".
10. If the choice is 4, display "Thank You! Visit Again."
11. Stop the program.

## 6. Flowchart

**Start**\
↓\
**Set Initial Balance**\
↓\
**Display ATM Menu**\
↓\
**Enter Choice**\
↓\
**Balance Inquiry / Deposit / Withdraw / Exit**\
↓\
**Display or Update Result**\
↓\
**Stop**

## 7. Project Files

-   `index.php` -- Main HTML and PHP program
-   `style.css` -- CSS styling
-   `README.md` -- Project documentation

## 8. Steps to Run

1.  Install XAMPP on the computer.
2.  Start **Apache** from the XAMPP Control Panel.
3.  Create a folder named `2443003_MiniATMSimulator` inside `htdocs`.
4.  Put `index.php` and `style.css` inside this folder.
5.  Open a web browser.
6.  Enter: `http://localhost/2443003_MiniATMSimulator/index.php`
7.  Select an ATM option and click **Submit**.

## 9. Expected Output

The ATM interface displays the selected transaction and the updated
balance.

Example: - Initial Balance: ₹10000 - Deposit: ₹2000 - Updated Balance:
₹12000

## 10. Output Screenshots

### 1. ATM Main Menu / Balance Inquiry

![Mini ATM Simulator Output](1000148360.jpg)

The above screenshot shows the Mini ATM Simulator interface with the Balance Inquiry option selected and the initial balance displayed as ₹10000.

2.  Deposit Successful
3.  Withdrawal Successful
4.  Insufficient Balance
5.  Exit Message

## 11. Repository Name

`2443003_MiniATMSimulator`

## 12. Conclusion

The Mini ATM Simulator is a simple PHP-based project that demonstrates
basic ATM operations using HTML, CSS and PHP without using a database.
