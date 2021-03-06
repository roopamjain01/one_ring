Feature: Report Abuse

    As a website user
    I want to report inappropriate content
    In order to maintain high quality content

    Scenario: Report abuse through preselected options
        Given a "page" "My Page"
        Given I go to the "page" "My Page"
        Then I should see "Report this page"
        When I select "Misleading" from "Reason"
        And I press "Submit Report"
        Then I should see "Thanks for your submission"
        And there should be an abuse report for "My Page" with reason "Misleading"
