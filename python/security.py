from selenium import webdriver
from selenium.common.exceptions import WebDriverException
import time
import winsound

def check_security():

    # Initialize the WebDriver
    driver = webdriver.Chrome()
    winsound.Beep(100, 3000)

    try:
        driver.get("https://icas.exenesia.com")

        time.sleep(2)

        if "https://icas.exenesia.com" in driver.current_url:
            print("Security check passed: Current URL is secure.")
        else:
            winsound.Beep(440, 3000)
            print("Security alert: Current URL does not match the expected pattern.")

    except WebDriverException as e:
        print(f"WebDriver Exception occurred: {str(e)}")
    except Exception as e:
        print(f"An error occurred: {str(e)}")

    finally:
        driver.quit()

check_security()
