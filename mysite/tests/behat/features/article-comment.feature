Feature: Report Abuse

  As a website user
  I want to report inappropriate content
  In order to maintain high quality content

  Background:
    Given a "page" and "my page"

  Scenario: Report abuse through preselected options
    Given I go to a page
    Then I should see "Report this page"
    When I select "Outdated" from "Reason"
    And I press "Submit Report"
    Then I should see "Thanks for your submission"

