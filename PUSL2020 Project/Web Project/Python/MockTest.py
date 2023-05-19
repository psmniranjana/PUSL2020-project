import mysql.connector

def connect_db():
    db = mysql.connector.connect(
        host='localhost',
        user='root',
        password='',
        database='cmc'
    )
    cursor = db.cursor()
    cursor.execute('''CREATE TABLE IF NOT EXISTS garbage_reports
                      (id INT PRIMARY KEY AUTO_INCREMENT,
                       latlng VARCHAR(50))''')
    db.close()

def save_location(lat, lng):
    latlng = f"{lat},{lng}"
    db = mysql.connector.connect(
        host='localhost',
        user='root',
        password='',
        database='cmc'
    )
    cursor = db.cursor()
    query = "INSERT INTO garbage_reports(garbadge_location) VALUES (%s)"
    values = (latlng,)
    cursor.execute(query, values)
    db.commit()
    db.close()
    print('Location added successfully!')

if __name__ == '__main__':
    connect_db()
    save_location(8.13129680728035, 80.56961447831316)
