from unittest import TestCase, mock
from approve_report import approve_report

class TestApproveReport(TestCase):

    @mock.patch('cms.db')  # mock the database connection
    def test_approve_report(self, mock_db):
        report_id = 123  # id of the report to be approved
        approve_report(report_id)
        mock_db.execute.assert_called_once_with(
            "UPDATE reports SET status = 'approved' WHERE id = %s", (report_id,)
        )
