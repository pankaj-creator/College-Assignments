import random
from PIL import Image, ImageDraw, ImageFont
import requests
import sys
import urllib
from pprint import pprint

url = "http://ws.audioscrobbler.com/2.0/"
body = {
    'method': "user.gettopartists",
    'user': "alairock",
    'api_key': '301a3a6d4301644d5a078e7f1fac0e78',
    'limit': 9,
    'period': '3month',
    'format': 'json'
}

r = requests.get(url, body)
if r.status_code == 403:
    print('cannot access')
    sys.exit()
artists = r.json()['topartists']['artist']

def download_file(url, directory):
    no = random.randint(1, 1000)
    path = directory + "/friends_image/" + 'newfile+{no}.jpg'.format(no=no)
    urllib.request.urlretrieve(url , path)  # <-- This works now!
    return path

image_info = []
for artist in artists:
    url = artist['image'][3]['#text']
    path = download_file(url, '/friends_image/')
    spot_info = {
        'name': artist['name'],
        'path': path,
    }
    image_info.append(spot_info)


def insert_name(image, name, cursor):
    draw = ImageDraw.Draw(image, 'RGBA')
    font = ImageFont.truetype('/Users/alairock/Desktop/demo/myfont.ttf', size=17)
    x = cursor[0]
    y = cursor[1]
    draw.rectangle([(x, y+200), (x+300, y+240)], (0, 0, 0, 123))
    draw.text((x+8, y+210), name, (255, 255, 255), font=font)

def create_collage(cells, cols=3, rows=3):
    w, h = Image.open(image_info[0]['path']).size
    collage_width = cols * w
    collage_height = rows * h
    new_image = Image.new('RGB', (collage_width, collage_height))
    cursor = (0,0)
    for cell in cells:
        # place image
        new_image.paste(Image.open(cell['path']), cursor)

        #add name
        insert_name(new_image, cell['name'], cursor)

        # move cursor
        y = cursor[1]
        x = cursor[0] + w
        if cursor[0] >= (collage_width - w):
            y = cursor[1] + h
            x = 0
        cursor = (x, y)

    new_image.show()


create_collage(image_info, cols=3, rows=3)