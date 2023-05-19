import mysql.connector

def connect_db():
    db = mysql.connector.connect(
        host='localhost',
        user='root',
        password='',
        database='cmc'
    )
    cursor = db.cursor()
    cursor.execute('''CREATE TABLE IF NOT EXISTS Location
                      (id INT PRIMARY KEY AUTO_INCREMENT,
                       latlng VARCHAR(50))''')
    db.close()
