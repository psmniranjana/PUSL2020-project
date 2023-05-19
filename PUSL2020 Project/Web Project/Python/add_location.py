from unittest import TestCase
from add_location import add_location
import mysql.connector

class TestAddLocationIntegration(TestCase):

    def setUp(self):
        self.test_db = mysql.connector.connect(
            host='localhost',
            user='root',
            password='',
            database='cms'
        )
        self.cursor = self.test_db.cursor()
        self.cursor.execute('''CREATE TABLE IF NOT EXISTS Location
                               (id INT PRIMARY KEY AUTO_INCREMENT,
                                latlng VARCHAR(50))''')

    def tearDown(self):
        self.cursor.execute('DROP TABLE IF EXISTS Location')
        self.test_db.close()

    def test_add_location(self):
        lat, lng = 8.13129680728035, 80.56961447831316
        add_location(lat, lng)
        self.cursor.execute('SELECT * FROM Location WHERE latlng = %s', (f"{lat},{lng}",))
        result = self.cursor.fetchone()
        self.assertIsNotNone(result)
