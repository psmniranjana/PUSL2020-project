from shared import connect_db

def approve_report(report_id):
    db = connect_db()
    cursor = db.cursor()
    query = "UPDATE Reports SET approved = 1 WHERE id = %s"
    values = (report_id,)
    cursor.execute(query, values)
    db.commit()
    db.close()
    print('Report approved successfully!')

def get_report_details(report_id):
    db = connect_db()
    cursor = db.cursor()
    query = "SELECT * FROM Reports WHERE id = %s"
    values = (report_id,)
    cursor.execute(query, values)
    result = cursor.fetchone()
    db.close()
    return result
