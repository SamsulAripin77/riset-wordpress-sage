tutor : 

- untuk awal suruh dulu fetch branch kosongkan

- jelaskan struktur folder wordpress
- wp-admin
- jelaskan konsep post,page,categories : membuat
- jelaskan install plugin ( ex classic editor )
- cara kerja file page, single, search
- jelaskan singkronisasi page di wp admin dan file, begitu juga dengan post, custom page
- jelaskan cara kerja wp query dengna membuat page article
- jelaskan konsep slug
- function.php


- tambag di add domain, add redirect
- set primary : domain active
# Membuat Simple Website Dengan Wrodpress

## Part 1
- mendowload dan menginstall wordpress di lokal : https://wordpress.org/download/
- menstup database dan mensetup website sampai bisa masuk ke halaman wp admin
- website harus bisa di akses videw custom domain wordpress.test
- clone repository ini ke folder /wp-content/themes/
- actifkan themes melalui wp-admin -> themes
- membuat project di vs code, menjalankan : composer install, npm install, npm run build, npm run dev

- memulai slicing figma : https://www.figma.com/design/zKUAyU8pD5hRf4lTAKYFJf/Rasa-Nusa?node-id=0-1&p=f&t=29RnnrA4SUSS2Kdc-0
  - mulai melakukan slicing menggunakan tailwind css
  - untuk kode navbar simpan di section/header.blade.php
  - untuk kode footer simpan di section/footer.blade.php
  - untuk kode main content simpan di front-page.blade.php
- mengimplementasikan responsive layout di mobile, table dan desktop
- menerapkan web componen pada element card dan FAQ dengan data yang di dikrim dari front-page dalam bentuk array
- membuat navbar jadi drawer di mobile

### optional : 
- menambahkan efek animasi pada hover card, hover menu

# Part 2


#Ambara Startegi : 

## Todo
- fixing responsive navbar
- clean asset resource
- fixing footer
- complete timeline
- bikin cpt backend
- polylang
- load more & filter with alphine js
- tambah border bootom with di navbar
- pada pengacara tambahkan read more ke page pengacara
- 

## Strukture

+ homepage
  - banner
  - slider article & load more
  - section Kami Adalah  : image & description
  - section deskripsi lain -> read more 

+ firma kami :
  - headline
  - section : image, tagline, description, read more
  - timeline
  - affiliasi
  - grid brand mengakui
  - founder

+ pengacara kami
  - banner with title & desc
  - grid profile with select filter:  all attorney, partner, advisor associate, of counsel
  - grid dengan pagination tanpa image, componen card : role, name, button link
  - grid dibagi menjadi 3 kelompok

+ detail pengacara
  - sidebar : list pengacara group by category ( accordion )
  - main contentn : 
    - role
    - name
    - image
    - email, linkedin, download porto, description
    - accordion : area of focus, bidang perwakilan, edukasi, assosiasi dan keangotaan profesional, penghargaan (gallery)
  - berita lainnya


+ Blog
  - filter catagory & areka praktek ( select )
  - grid card 3 kolom
  - componen card : imaage, tags/date, title, read more
  - load more

+ single blog
  - banner
  - little category
  - title
  - title - share
  - content
  - realted article

+ keahlian kami
  - banner
  - title/tagline
  - subtitle/description
  - accrodion list

+ contact us 
  - banner image
  - headline
  - google map(with link more), nama kantor, alamat lengkap, contacts, 