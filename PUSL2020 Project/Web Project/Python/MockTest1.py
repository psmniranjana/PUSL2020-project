from shared import connect_db

def add_location(lat, lng):
    latlng = f"{lat},{lng}"
    db = connect_db()
    cursor = db.cursor()
    query = "INSERT INTO Location (latlng) VALUES (%s)"
    values = (latlng,)
    cursor.execute(query, values)
    db.commit()
    db.close()
    print('Location added successfully!')
