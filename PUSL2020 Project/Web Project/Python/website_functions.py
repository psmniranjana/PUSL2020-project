import unittest
from website_functions import login

class TestWebsiteFunctions(unittest.TestCase):
    def test_login_returns_access_token(self):
        credentials = {'username': 'admin', 'password': 'admin123'}
        access_token = login(credentials)
        self.assertIsInstance(access_token, str)
