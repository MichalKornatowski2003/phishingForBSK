import pyautogui
import time
from datetime import datetime


def capture_screenshot(region, interval, duration):
    end_time = time.time() + duration
    while time.time() < end_time:
        filename = f'screanshot.png'
        screenshot = pyautogui.screenshot(region=region)
        screenshot.save(filename)
        print(f'Screenshot saved as {filename}')
        time.sleep(interval)


# Ustawienia
region_to_capture = (1012, 490, 185, 185)  # (lewy_górny_x, lewy_górny_y, szerokość, wysokość)
interval_between_screenshots = 5  # Co ile sekund robić zrzut
total_duration = 60  # Całkowity czas (sekundy)

capture_screenshot(region_to_capture, interval_between_screenshots, total_duration)
