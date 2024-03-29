from flask import Flask, render_template, request, redirect, url_for
import mysql.connector

app = Flask(__name)

# Configure your MySQL database connection
db = mysql.connector.connect(
    host='localhost',
    user='root',
    password='1234@Bha',
    database='register'
)

cur = db.cursor()

@app.route('/')
def index():
    return render_template('your_form.html')  # Replace 'your_form.html' with the actual path to your HTML form

@app.route('/submit', methods=['POST'])
def submit():
    # Retrieve form data
    community = request.form.get('community')
    member = request.form.get('member')
    regno = request.form.get('regno')
    fname = request.form.get('fname')
    # Retrieve other form fields here

    # Insert data into the database
    sql = "INSERT INTO register (community, member, regno, fname) VALUES (%s, %s, %s, %s)"
    values = (community, member, regno, fname)

    cur.execute(sql, values)
    db.commit()

    return redirect(url_for('index'))  # Redirect to the form page after submission

if __name__ == '__main__':
    app.run(debug=True)
