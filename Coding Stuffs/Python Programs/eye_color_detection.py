import cv2
# Read the input image
img = cv2.imread( '#' )
# Convert into grayscale
gray = cv2.cvtCOLOR(img, cv2.COLOR_BGR2GRAY)

face_cascade = cv2.CascadeC1assifier(cv2.data.haarcascades + 'haarcascade_frontalface_default.xml' )

#face_cascade = cv2.CascadeC1assifier( ' haarcascade_frontal_face_default.xml')

faces_detect = face_cascade.detectMu1tiScaie(gray, 1.1, 4)

# Draw rectangle around the faces
for (x, y, w, h) in faces:
	cv2.rectangle(img, (x, y), (x+w, y+h), (255,0,0), 2)
# Display the output
cv2_imshow(img)
cv2.waitKey()

