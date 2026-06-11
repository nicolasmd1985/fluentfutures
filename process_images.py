import os
from PIL import Image, ImageOps
from pillow_heif import register_heif_opener

# Registrar el abridor de HEIF con Pillow
register_heif_opener()

images_dir = "/home/nicolas/Development/Fluent-futures/Images"

def process_image(file_path, output_path):
    print(f"Procesando: {file_path} -> {output_path}")
    try:
        # Abrir imagen
        img = Image.open(file_path)
        
        # Aplicar la rotación del EXIF para fijar la orientación real en los píxeles
        img = ImageOps.exif_transpose(img)
        
        # Si la imagen tiene transparencia, la convertimos a RGB para guardarla como JPEG
        if img.mode in ("RGBA", "P"):
            img = img.convert("RGB")
            
        # Guardar como JPEG de alta calidad
        img.save(output_path, "JPEG", quality=92)
        print("-> Guardado con éxito")
    except Exception as e:
        print(f"-> Error procesando {file_path}: {e}")

# Buscar archivos en el directorio de imágenes
for filename in os.listdir(images_dir):
    file_path = os.path.join(images_dir, filename)
    if not os.path.isfile(file_path):
        continue
        
    lower_name = filename.lower()
    
    # Procesar archivos HEIC y guardarlos como JPG
    if lower_name.endswith(".heic"):
        output_name = filename[:-5] + ".jpg"
        output_path = os.path.join(images_dir, output_name)
        process_image(file_path, output_path)
        
    # Procesar JPEGs existentes para corregir orientaciones incorrectas (como IMG_8347.jpeg)
    elif lower_name.endswith((".jpeg", ".jpg")):
        process_image(file_path, file_path)
