import unittest
from unittest.mock import patch
import main

class TestMain(unittest.TestCase):
    
    def test_add_location(self):
        with patch('main.add_location') as mock_add_location:
            main.add_location('8.13129680728035', '80.56961447831316')
            mock_add_location.assert_called_once_with('8.13129680728035', '80.56961447831316')
    
    def test_approve_report(self):
        with patch('main.approve_report') as mock_approve_report:
            main.approve_report('report_id')
            mock_approve_report.assert_called_once_with('report_id')
    
    def test_get_report_details(self):
        with patch('main.get_report_details') as mock_get_report_details:
            main.get_report_details('report_id')
            mock_get_report_details.assert_called_once_with('report_id')

if __name__ == '__main__':
    unittest.main()
