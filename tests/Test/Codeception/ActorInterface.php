<?php

declare(strict_types=1);

namespace Tests\FrameworkBundle\Test\Codeception;

use Closure;
use Codeception\TestInterface;
use Facebook\WebDriver\WebDriverElement;

interface ActorInterface
{
    public function acceptPopup();

    /**
     * @param string $role
     */
    public function am($role);

    /**
     * @param string $databaseKey
     */
    public function amConnectedToDatabase($databaseKey);

    /**
     * @param string $page
     */
    public function amOnPage($page);

    /**
     * @param string $subdomain
     * @return mixed
     */
    public function amOnSubdomain($subdomain);

    /**
     * @param string $url
     */
    public function amOnUrl($url);

    /**
     * @param string $field
     * @param string $value
     */
    public function appendField($field, $value);

    /**
     * @param string $field
     * @param string $filename
     */
    public function attachFile($field, $filename);

    /**
     * @param string $text
     * @param array|string $selector optional
     */
    public function canSee($text, $selector = null);

    /**
     * @param string $checkboxId
     */
    public function canSeeCheckboxIsCheckedById(string $checkboxId): void;

    /**
     * @param string $label
     */
    public function canSeeCheckboxIsCheckedByLabel(string $label): void;

    /**
     * @param string $cookie
     * @param array $params
     */
    public function canSeeCookie($cookie, array $params = []);

    /**
     * @param string $page
     */
    public function canSeeCurrentPageEquals($page);

    /**
     * @param string $uri
     */
    public function canSeeCurrentUrlEquals($uri);

    /**
     * @param string $uri
     */
    public function canSeeCurrentUrlMatches($uri);

    /**
     * @param array|string $selector
     * @param array $attributes
     */
    public function canSeeElement($selector, $attributes = []);

    /**
     * @param array|string $selector
     * @param array $attributes
     */
    public function canSeeElementInDOM($selector, $attributes = []);

    /**
     * @param string $text
     * @param string $css
     */
    public function canSeeInCss(string $text, string $css): void;

    /**
     * @param string $uri
     */
    public function canSeeInCurrentUrl($uri);

    /**
     * @param string $table
     * @param array $criteria
     */
    public function canSeeInDatabase($table, $criteria = null);

    /**
     * @param string $text
     * @param \Facebook\WebDriver\WebDriverElement $element
     */
    public function canSeeInElement(string $text, WebDriverElement $element);

    /**
     * @param string $value
     * @param \Facebook\WebDriver\WebDriverElement $element
     */
    public function canSeeInFieldByElement(string $value, WebDriverElement $element): void;

    /**
     * @param string $value
     * @param string $fieldName
     */
    public function canSeeInFieldByName(string $value, string $fieldName): void;

    /**
     * @param array|string $formSelector
     * @param array $params
     */
    public function canSeeInFormFields($formSelector, array $params);

    /**
     * @param string $text
     */
    public function canSeeInPageSource($text);

    /**
     * @param string $text
     */
    public function canSeeInPopup($text);

    /**
     * @param string $raw
     */
    public function canSeeInSource($raw);

    /**
     * @param string $title
     */
    public function canSeeInTitle($title);

    /**
     * @param string $text
     * @param string $url optional
     */
    public function canSeeLink($text, $url = null);

    /**
     * @param int $expectedNumber Expected number
     * @param string $table Table name
     * @param array $criteria Search criteria [Optional]
     */
    public function canSeeNumRecords($expectedNumber, $table, array $criteria = []);

    /**
     * @param array|string $selector
     * @param mixed $expected int or int[]
     */
    public function canSeeNumberOfElements($selector, $expected);

    /**
     * @param array|string $selector
     * @param mixed $expected int or int[]
     */
    public function canSeeNumberOfElementsInDOM($selector, $expected);

    /**
     * @param array|string $selector
     * @param string $optionText
     */
    public function canSeeOptionIsSelected($selector, $optionText);

    public function cancelPopup();

    /**
     * @param string $text
     * @param array|string $selector optional
     */
    public function cantSee($text, $selector = null);

    /**
     * @param string $checkboxId
     */
    public function cantSeeCheckboxIsCheckedById(string $checkboxId): void;

    /**
     * @param string $label
     */
    public function cantSeeCheckboxIsCheckedByLabel(string $label): void;

    /**
     * @param string $cookie
     * @param array $params
     */
    public function cantSeeCookie($cookie, array $params = []);

    /**
     * @param string $uri
     */
    public function cantSeeCurrentUrlEquals($uri);

    /**
     * @param string $uri
     */
    public function cantSeeCurrentUrlMatches($uri);

    /**
     * @param array|string $selector
     * @param array $attributes
     */
    public function cantSeeElement($selector, $attributes = []);

    /**
     * @param array|string $selector
     * @param array $attributes
     */
    public function cantSeeElementInDOM($selector, $attributes = []);

    /**
     * @param string $uri
     */
    public function cantSeeInCurrentUrl($uri);

    /**
     * @param string $table
     * @param array $criteria
     */
    public function cantSeeInDatabase($table, $criteria = []);

    /**
     * @param string $field
     * @param string $value
     */
    public function cantSeeInField($field, $value);

    /**
     * @param array|string $formSelector
     * @param array $params
     */
    public function cantSeeInFormFields($formSelector, array $params);

    /**
     * @param string $text
     */
    public function cantSeeInPageSource($text);

    /**
     * @param string $text
     */
    public function cantSeeInPopup($text);

    /**
     * @param string $raw
     */
    public function cantSeeInSource($raw);

    /**
     * @param string $title
     */
    public function cantSeeInTitle($title);

    /**
     * @param string $text
     * @param string $url optional
     */
    public function cantSeeLink($text, $url = null);

    /**
     * @param array|string $selector
     * @param string $optionText
     */
    public function cantSeeOptionIsSelected($selector, $optionText);

    /**
     * @param string $optionId
     */
    public function checkOptionById(string $optionId): void;

    /**
     * @param string $label
     */
    public function checkOptionByLabel(string $label): void;

    public function cleanup();

    /**
     * @param string $field
     */
    public function clearField($field);

    /**
     * @param string $css
     * @param mixed|null $contextSelector
     */
    public function clickByCss(string $css, $contextSelector = null): void;

    /**
     * @param \Facebook\WebDriver\WebDriverElement $element
     * @return \Facebook\WebDriver\WebDriverElement
     */
    public function clickByElement(WebDriverElement $element): WebDriverElement;

    /**
     * @param string $name
     * @param \Facebook\WebDriver\WebDriverBy|\Facebook\WebDriver\WebDriverElement|null $contextSelector
     */
    public function clickByName(string $name, $contextSelector = null): void;

    /**
     * @param string $text
     * @param \Facebook\WebDriver\WebDriverBy|\Facebook\WebDriver\WebDriverElement|null $contextSelector
     */
    public function clickByText(string $text, $contextSelector = null): void;

    /**
     * @param string $cssOrXPath css or xpath of the web element (body by default)
     * @param int $offsetX
     * @param int $offsetY
     */
    public function clickWithLeftButton($cssOrXPath = null, $offsetX = null, $offsetY = null);

    /**
     * @param string $cssOrXPath css or xpath of the web element (body by default)
     * @param int $offsetX
     * @param int $offsetY
     */
    public function clickWithRightButton($cssOrXPath = null, $offsetX = null, $offsetY = null);

    public function closeTab();

    /**
     * @param string $css
     * @return int
     */
    public function countVisibleByCss(string $css): int;

    /**
     * @param \Codeception\TestInterface $test
     */
    public function debugWebDriverLogs(?TestInterface $test = null);

    /**
     * @param string $name
     */
    public function deleteSessionSnapshot($name);

    /**
     * @param string $text
     * @param array|string $selector optional
     */
    public function dontSee($text, $selector = null);

    /**
     * @param string $checkboxId
     */
    public function dontSeeCheckboxIsCheckedById(string $checkboxId): void;

    /**
     * @param string $label
     */
    public function dontSeeCheckboxIsCheckedByLabel(string $label): void;

    /**
     * @param string $cookie
     * @param array $params
     */
    public function dontSeeCookie($cookie, array $params = []);

    /**
     * @param string $uri
     */
    public function dontSeeCurrentUrlEquals($uri);

    /**
     * @param string $uri
     */
    public function dontSeeCurrentUrlMatches($uri);

    /**
     * @param array|string $selector
     * @param array $attributes
     */
    public function dontSeeElement($selector, $attributes = []);

    /**
     * @param array|string $selector
     * @param array $attributes
     */
    public function dontSeeElementInDOM($selector, $attributes = []);

    /**
     * @param string $uri
     */
    public function dontSeeInCurrentUrl($uri);

    /**
     * @param string $table
     * @param array $criteria
     */
    public function dontSeeInDatabase($table, $criteria = []);

    /**
     * @param string $field
     * @param string $value
     */
    public function dontSeeInField($field, $value);

    /**
     * @param array|string $formSelector
     * @param array $params
     */
    public function dontSeeInFormFields($formSelector, array $params);

    /**
     * @param string $text
     */
    public function dontSeeInPageSource($text);

    /**
     * @param string $text
     */
    public function dontSeeInPopup($text);

    /**
     * @param string $raw
     */
    public function dontSeeInSource($raw);

    /**
     * @param string $title
     */
    public function dontSeeInTitle($title);

    /**
     * @param string $text
     * @param string $url optional
     */
    public function dontSeeLink($text, $url = null);

    /**
     * @param array|string $selector
     * @param string $optionText
     */
    public function dontSeeOptionIsSelected($selector, $optionText);

    /**
     * @param string $cssOrXPath
     */
    public function doubleClick($cssOrXPath);

    /**
     * @param string $source (CSS ID or XPath)
     * @param string $target (CSS ID or XPath)
     */
    public function dragAndDrop($source, $target);

    /**
     * @param callable $callable
     */
    public function execute($callable);

    /**
     * @param string $script
     * @param array $arguments
     * @return mixed
     */
    public function executeAsyncJS($script, array $arguments = []);

    /**
     * @param \Closure $function
     */
    public function executeInSelenium(Closure $function);

    /**
     * @param string $script
     * @param array $arguments
     * @return mixed
     */
    public function executeJS($script, array $arguments = []);

    /**
     * @param string $prediction
     */
    public function expect($prediction);

    /**
     * @param string $prediction
     */
    public function expectTo($prediction);

    /**
     * @param string $css
     * @param string $value
     */
    public function fillFieldByCss(string $css, string $value): void;

    /**
     * @param \Facebook\WebDriver\WebDriverElement $element
     * @param string $value
     */
    public function fillFieldByElement(WebDriverElement $element, string $value): void;

    /**
     * @param string $fieldName
     * @param string $value
     */
    public function fillFieldByName(string $fieldName, string $value): void;

    /**
     * @param string $cssOrXpath
     * @param string $attribute
     * @return mixed
     */
    public function grabAttributeFrom($cssOrXpath, $attribute);

    /**
     * @param string $table
     * @param string $column
     * @param array $criteria
     * @return array
     */
    public function grabColumnFromDatabase($table, $column, array $criteria = []);

    /**
     * @param string $cookie
     * @param array $params
     * @return mixed
     */
    public function grabCookie($cookie, array $params = []);

    /**
     * @param string $uri optional
     * @return mixed
     */
    public function grabFromCurrentUrl($uri = null);

    /**
     * @param string $table
     * @param string $column
     * @param array $criteria
     * @return mixed
     */
    public function grabFromDatabase($table, $column, $criteria = []);

    /**
     * @param string $cssOrXpath
     * @param string $attribute
     * @return string[]
     */
    public function grabMultiple($cssOrXpath, $attribute = null);

    /**
     * @param string $table Table name
     * @param array $criteria Search criteria [Optional]
     * @return int
     */
    public function grabNumRecords($table, array $criteria = []);

    /**
     * @return string current page source code
     */
    public function grabPageSource();

    /**
     * @param string $serviceId
     * @return object
     */
    public function grabServiceFromContainer($serviceId);

    /**
     * @param string $cssOrXPathOrRegex
     * @return mixed
     */
    public function grabTextFrom($cssOrXPathOrRegex);

    /**
     * @param string $field
     * @return mixed
     */
    public function grabValueFrom($field);

    /**
     * @param string $table
     * @param array $data
     * @return int
     */
    public function haveInDatabase($table, array $data);

    /**
     * @param string $name
     * @return mixed
     */
    public function loadSessionSnapshot($name);

    /**
     * @param string $name
     */
    public function makeScreenshot($name = null);

    public function maximizeWindow();

    public function moveBack();

    public function moveForward();

    /**
     * @param string $cssOrXPath css or xpath of the web element
     * @param int $offsetX
     * @param int $offsetY
     */
    public function moveMouseOver($cssOrXPath = null, $offsetX = null, $offsetY = null);

    /**
     * @param string $css
     * @param int|null $offsetX
     * @param int|null $offsetY
     */
    public function moveMouseOverByCss(string $css, ?int $offsetX = null, ?int $offsetY = null): void;

    public function openNewTab();

    public function pauseExecution();

    /**
     * @param string $databaseKey
     * @param \Codeception\Util\ActionSequence|array|callable $actions
     */
    public function performInDatabase($databaseKey, $actions);

    /**
     * @param \Facebook\WebDriver\WebDriverElement $element
     * @param array $actions
     * @param int $timeout
     */
    public function performOn($element, $actions, $timeout = 10);

    /**
     * @param \Facebook\WebDriver\WebDriverElement $element
     * @param string|string[] $keys
     */
    public function pressKeysByElement(WebDriverElement $element, $keys): void;

    public function reloadPage();

    /**
     * @param string $cookie
     * @param array $params
     * @return mixed
     */
    public function resetCookie($cookie, array $params = []);

    /**
     * @param int $width
     * @param int $height
     */
    public function resizeWindow($width, $height);

    /**
     * @param string $name
     * @return mixed
     */
    public function saveSessionSnapshot($name);

    /**
     * @param array|string $selector
     * @param int $offsetX
     * @param int $offsetY
     */
    public function scrollTo($selector, $offsetX = null, $offsetY = null);

    /**
     * @param string $text
     * @param array|string $selector optional
     */
    public function see($text, $selector = null);

    /**
     * @param string $checkboxId
     */
    public function seeCheckboxIsCheckedById(string $checkboxId): void;

    /**
     * @param string $label
     */
    public function seeCheckboxIsCheckedByLabel(string $label): void;

    /**
     * @param string $cookie
     * @param array $params
     */
    public function seeCookie($cookie, array $params = []);

    /**
     * @param string $page
     */
    public function seeCurrentPageEquals($page);

    /**
     * @param string $uri
     */
    public function seeCurrentUrlEquals($uri);

    /**
     * @param string $uri
     */
    public function seeCurrentUrlMatches($uri);

    /**
     * @param array|string $selector
     * @param array $attributes
     */
    public function seeElement($selector, $attributes = []);

    /**
     * @param array|string $selector
     * @param array $attributes
     */
    public function seeElementInDOM($selector, $attributes = []);

    /**
     * @param string $text
     * @param string $css
     */
    public function seeInCss(string $text, string $css);

    /**
     * @param string $uri
     */
    public function seeInCurrentUrl($uri);

    /**
     * @param string $table
     * @param array $criteria
     */
    public function seeInDatabase($table, $criteria = []);

    /**
     * @param string $text
     * @param \Facebook\WebDriver\WebDriverElement $element
     */
    public function seeInElement(string $text, WebDriverElement $element): void;

    /**
     * @param string $value
     * @param \Facebook\WebDriver\WebDriverElement $element
     */
    public function seeInFieldByElement(string $value, WebDriverElement $element): void;

    /**
     * @param string $value
     * @param string $fieldName
     */
    public function seeInFieldByName(string $value, string $fieldName): void;

    /**
     * @param array|string $formSelector
     * @param array $params
     */
    public function seeInFormFields($formSelector, array $params);

    /**
     * @param string $text
     */
    public function seeInPageSource($text);

    /**
     * @param string $text
     */
    public function seeInPopup($text);

    /**
     * @param string $raw
     */
    public function seeInSource($raw);

    /**
     * @param string $title
     */
    public function seeInTitle($title);

    /**
     * @param string $text
     * @param string $url optional
     */
    public function seeLink($text, $url = null);

    /**
     * @param int $expectedNumber Expected number
     * @param string $table Table name
     * @param array $criteria Search criteria [Optional]
     */
    public function seeNumRecords($expectedNumber, $table, array $criteria = []);

    /**
     * @param array|string $selector
     * @param mixed $expected int or int[]
     */
    public function seeNumberOfElements($selector, $expected);

    /**
     * @param array|string $selector
     * @param mixed $expected int or int[]
     */
    public function seeNumberOfElementsInDOM($selector, $expected);

    /**
     * @param array|string $selector
     * @param string $optionText
     */
    public function seeOptionIsSelected($selector, $optionText);

    /**
     * @param array|string $select
     * @param string $option
     */
    public function selectOption($select, $option);

    /**
     * @param string $selectCss
     * @param string $optionValue
     */
    public function selectOptionByCssAndValue(string $selectCss, string $optionValue);

    /**
     * @param string $cookie
     * @param string $value
     * @param array $params
     * @param mixed $showDebug
     * @return mixed
     */
    public function setCookie($cookie, $value, array $params = [], $showDebug = true);

    /**
     * @param array|string $selector
     * @param array $params
     * @param string $button
     */
    public function submitForm($selector, array $params, $button = null);

    /**
     * @param string|null $name
     */
    public function switchToIFrame($name = null);

    public function switchToLastOpenedWindow();

    /**
     * @param int $offset 1
     */
    public function switchToNextTab($offset = 1);

    /**
     * @param int $offset 1
     */
    public function switchToPreviousTab($offset = 1);

    /**
     * @param string|null $name
     */
    public function switchToWindow($name = null);

    /**
     * @param array $keys
     */
    public function typeInPopup($keys);

    /**
     * @param string $option
     */
    public function uncheckOption($option);

    /**
     * @param array|string $select
     * @param string $option
     */
    public function unselectOption($select, $option);

    /**
     * @param string $table
     * @param array $data
     * @param array $criteria
     */
    public function updateInDatabase($table, array $data, array $criteria = []);

    /**
     * @param int|float $timeout secs
     */
    public function wait($timeout);

    /**
     * @param int $timeout
     */
    public function waitForAjax($timeout = null);

    /**
     * @param \Facebook\WebDriver\WebDriverElement $element
     * @param int $timeout seconds
     */
    public function waitForElement($element, $timeout = null);

    /**
     * @param \Facebook\WebDriver\WebDriverElement $element
     * @param \Closure $callback
     * @param int $timeout seconds
     */
    public function waitForElementChange($element, Closure $callback, $timeout = null);

    /**
     * @param \Facebook\WebDriver\WebDriverElement $element
     * @param int $timeout seconds
     */
    public function waitForElementClickable($element, $timeout = null);

    /**
     * @param \Facebook\WebDriver\WebDriverElement $element
     * @param int $timeout seconds
     */
    public function waitForElementNotVisible($element, $timeout = null);

    /**
     * @param \Facebook\WebDriver\WebDriverElement $element
     * @param int $timeout seconds
     */
    public function waitForElementVisible($element, $timeout = null);

    /**
     * @param string $script
     * @param int $timeout seconds
     */
    public function waitForJS($script, $timeout = null);

    /**
     * @param string $text
     * @param int $timeout seconds
     * @param string $selector optional
     */
    public function waitForText($text, $timeout = null, $selector = null);

    /**
     * @param string $text
     */
    public function wantTo($text);

    /**
     * @param string $text
     */
    public function wantToTest($text);
}
