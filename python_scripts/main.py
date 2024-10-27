#Totally New

# import cv2
# import numpy as np
# import os

# # Define the paths for the Haar cascade file and necklace image
# cascade_path = os.path.join(os.path.dirname(__file__), 'haarcascade_frontalface_default.xml')
# necklace_image_path = os.path.join(os.path.dirname(__file__), 'necklace7.png')

# # Check if the Haar cascade file exists
# if not os.path.exists(cascade_path):
#     raise FileNotFoundError(f"Haar cascade file not found: {cascade_path}")

# # Check if the necklace image file exists
# if not os.path.exists(necklace_image_path):
#     raise FileNotFoundError(f"Necklace image file not found: {necklace_image_path}")

# # Load pre-trained face detection model
# face_cascade = cv2.CascadeClassifier(cascade_path)
# if face_cascade.empty():
#     raise ValueError(f"Failed to load Haar cascade file: {cascade_path}")

# # Load the necklace image
# necklace_img = cv2.imread(necklace_image_path, cv2.IMREAD_UNCHANGED)
# if necklace_img is None:
#     raise ValueError(f"Failed to load necklace image: {necklace_image_path}")

# def detect_face_and_neck(image):
#     gray = cv2.cvtColor(image, cv2.COLOR_BGR2GRAY)
#     faces = face_cascade.detectMultiScale(gray, scaleFactor=1.1, minNeighbors=5, minSize=(30, 30))
    
#     for (x, y, w, h) in faces:
#         # Approximate neck region
#         neck_x = x + int(w * 0.00) 
#         neck_y = y + int(h * 1) #1.1
#         neck_w = w
#         neck_h = int(h * 0.5)
#         return (neck_x, neck_y, neck_w, neck_h)
    
#     return None

# def overlay_necklace(frame, necklace_img, neck_region):
#     (x, y, w, h) = neck_region
#     # Resize the necklace image to fit the neck region
#     resized_necklace = cv2.resize(necklace_img, (w, h))
    
#     # Separate the color and alpha channels
#     necklace_rgb = resized_necklace[:, :, :3]
#     alpha_mask = resized_necklace[:, :, 3] / 255.0  # Normalize alpha channel

#     # Get the region of interest on the frame
#     roi = frame[y:y+h, x:x+w]
    
#     # Resize roi to match necklace_rgb dimensions
#     roi_resized = cv2.resize(roi, (necklace_rgb.shape[1], necklace_rgb.shape[0]))
    
#     # Blend the necklace with the ROI
#     for c in range(3):
#         roi_resized[:, :, c] = roi_resized[:, :, c] * (1 - alpha_mask) + necklace_rgb[:, :, c] * alpha_mask

#     # Replace the original region in the frame with the blended ROI
#     frame[y:y+h, x:x+w] = roi_resized

# cap = cv2.VideoCapture(0)

# while True:
#     ret, frame = cap.read()
#     if not ret:
#         break
    
#     neck_region = detect_face_and_neck(frame)
#     if neck_region:
#         overlay_necklace(frame, necklace_img, neck_region)
    
#     cv2.imshow('Webcam', frame)
    
#     if cv2.waitKey(1) & 0xFF == ord('q'):
#         break

# cap.release()
# cv2.destroyAllWindows()



#################################################################################################################################

# import cv2
# import numpy as np
# import os

# # Define the paths for the Haar cascade file, input image, and necklace image
# cascade_path = os.path.join(os.path.dirname(__file__), 'haarcascade_frontalface_default.xml')
# input_image_path = os.path.join(os.path.dirname(__file__), 'girl4.jpg')  # Replace with your image file
# necklace_image_path = os.path.join(os.path.dirname(__file__), 'necklace5.png')

# # Check if the Haar cascade file exists
# if not os.path.exists(cascade_path):
#     raise FileNotFoundError(f"Haar cascade file not found: {cascade_path}")

# # Check if the input image file exists
# if not os.path.exists(input_image_path):
#     raise FileNotFoundError(f"Input image file not found: {input_image_path}")

# # Check if the necklace image file exists
# if not os.path.exists(necklace_image_path):
#     raise FileNotFoundError(f"Necklace image file not found: {necklace_image_path}")

# # Load pre-trained face detection model
# face_cascade = cv2.CascadeClassifier(cascade_path)
# if face_cascade.empty():
#     raise ValueError(f"Failed to load Haar cascade file: {cascade_path}")

# # Load the input image and necklace image
# input_image = cv2.imread(input_image_path)
# necklace_img = cv2.imread(necklace_image_path, cv2.IMREAD_UNCHANGED)
# if input_image is None:
#     raise ValueError(f"Failed to load input image: {input_image_path}")
# if necklace_img is None:
#     raise ValueError(f"Failed to load necklace image: {necklace_image_path}")

# def detect_face_and_neck(image):
#     gray = cv2.cvtColor(image, cv2.COLOR_BGR2GRAY)
#     faces = face_cascade.detectMultiScale(gray, scaleFactor=1.1, minNeighbors=5, minSize=(30, 30))
    
#     for (x, y, w, h) in faces:
#         # Approximate neck region
#         neck_x = x + int(w * 0.03) 
#         neck_y = y + int(h * 1.06)  # Adjust for better alignment
#         neck_w = w
#         neck_h = int(h * 0.5)
#         return (neck_x, neck_y, neck_w, neck_h)
    
#     return None

# def overlay_necklace(frame, necklace_img, neck_region):
#     (x, y, w, h) = neck_region
#     # Resize the necklace image to fit the neck region
#     resized_necklace = cv2.resize(necklace_img, (w, h))
    
#     # Separate the color and alpha channels
#     necklace_rgb = resized_necklace[:, :, :3]
#     alpha_mask = resized_necklace[:, :, 3] / 255.0  # Normalize alpha channel

#     # Get the region of interest on the frame
#     roi = frame[y:y+h, x:x+w]
    
#     # Resize roi to match necklace_rgb dimensions
#     roi_resized = cv2.resize(roi, (necklace_rgb.shape[1], necklace_rgb.shape[0]))
    
#     # Blend the necklace with the ROI
#     for c in range(3):
#         roi_resized[:, :, c] = roi_resized[:, :, c] * (1 - alpha_mask) + necklace_rgb[:, :, c] * alpha_mask

#     # Replace the original region in the frame with the blended ROI
#     frame[y:y+h, x:x+w] = roi_resized

# # Detect the face and neck region in the input image
# neck_region = detect_face_and_neck(input_image)
# if neck_region:
#     overlay_necklace(input_image, necklace_img, neck_region)
# else:
#     raise ValueError("No face detected in the image.")

# # Save the output image
# output_image_path = os.path.join(os.path.dirname(__file__), 'output_image_with_necklace.jpg')
# cv2.imwrite(output_image_path, input_image)

# # Display the result (optional)
# cv2.imshow('Result', input_image)
# cv2.waitKey(0)
# cv2.destroyAllWindows()

# print(f"Output image saved at: {output_image_path}")


#################################################################################################################################


import cv2
import sys
import os

# Get command line arguments
input_image_path = sys.argv[1]
necklace_image_path = sys.argv[2]
output_image_path = sys.argv[3]

# Load pre-trained face detection model
cascade_path = os.path.join(os.path.dirname(__file__), 'haarcascade_frontalface_default.xml')
face_cascade = cv2.CascadeClassifier(cascade_path)

# Load the input image and necklace image
input_image = cv2.imread(input_image_path)
necklace_img = cv2.imread(necklace_image_path, cv2.IMREAD_UNCHANGED)

def detect_face_and_neck(image):
    gray = cv2.cvtColor(image, cv2.COLOR_BGR2GRAY)
    faces = face_cascade.detectMultiScale(gray, scaleFactor=1.1, minNeighbors=5, minSize=(30, 30))
    
    for (x, y, w, h) in faces:
        neck_x = x + int(w * 0.02) 
        neck_y = y + int(h * 1.05)
        neck_w = w
        neck_h = int(h * 0.7)
        # neck_x = x + int(w * 0.05) 
        # neck_y = y + int(h * 0.9)
        # neck_w = int(w * 0.8) 
        # neck_h = int(h * 0.6)
        return (neck_x, neck_y, neck_w, neck_h)
    
    return None

def overlay_necklace(frame, necklace_img, neck_region):
    (x, y, w, h) = neck_region
    resized_necklace = cv2.resize(necklace_img, (w, h))
    necklace_rgb = resized_necklace[:, :, :3]
    alpha_mask = resized_necklace[:, :, 3] / 255.0
    roi = frame[y:y+h, x:x+w]
    roi_resized = cv2.resize(roi, (necklace_rgb.shape[1], necklace_rgb.shape[0]))

    for c in range(3):
        roi_resized[:, :, c] = roi_resized[:, :, c] * (1 - alpha_mask) + necklace_rgb[:, :, c] * alpha_mask

    frame[y:y+h, x:x+w] = roi_resized

neck_region = detect_face_and_neck(input_image)
if neck_region:
    overlay_necklace(input_image, necklace_img, neck_region)
    cv2.imwrite(output_image_path, input_image)
else:
    print("No face detected.")


