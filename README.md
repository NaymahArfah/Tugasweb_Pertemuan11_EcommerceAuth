# Tugas Rutin 11 - E-Commerce Database & Secure Authentication

Repository ini berisi implementasi Tugas Rutin 11 mata kuliah Pemrograman Web menggunakan Laravel.

---

## Identitas

- **Nama:** Naymah Arfah
- **NIM:** 4253550036
- **Program Studi:** Ilmu Komputer
- **Kelas:** PSIK 25 C
- **Mata Kuliah:** Pemrograman Web

---

## Deskripsi

Project ini merupakan implementasi Laravel yang berfokus pada:

- Database E-Commerce menggunakan Migration dan Eloquent
- Seeder dan Factory untuk menghasilkan data produk
- Relasi antar Model
- Eloquent Scope
- Authentication menggunakan Laravel Breeze
- Multi-role user: admin, editor, dan user
- Custom Middleware untuk pembatasan akses
- Authorization menggunakan Policy
- Route Protection
- CRUD Post dengan penerapan Policy
- Pengujian hak akses berdasarkan role

---

## Teknologi yang Digunakan

- Laravel 12.69.3
- PHP 8.2.34
- MySQL
- Laravel Breeze
- Blade
- Eloquent ORM
- Composer
- Vite
- Tailwind CSS

---

## Database

Database menggunakan beberapa tabel utama untuk kebutuhan E-Commerce:

1. users
2. categories
3. products
4. orders
5. order_items
6. tags
7. product_tag

Database menggunakan **Foreign Key** untuk menghubungkan tabel yang saling berelasi.

---

## Seeder & Factory

Factory dan Seeder digunakan untuk menghasilkan data dummy secara otomatis.

Project memiliki data produk sebanyak **50+ produk** yang dapat digunakan untuk pengujian database, relationship, dan query Eloquent.

---

## Model & Relationships

Beberapa relationship yang digunakan:

- User memiliki banyak Product
- User memiliki banyak Order
- User memiliki banyak Post
- Category memiliki banyak Product
- Product memiliki Category
- Product memiliki banyak OrderItem
- Product memiliki banyak Tag
- Product dan Tag menggunakan relasi Many-to-Many

---

## Eloquent Scope

Project memiliki scope:

```php
Product::inStock()->get();