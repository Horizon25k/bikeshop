<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains over 1500 video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for funding Laravel development. If you are interested in becoming a sponsor, please visit the Laravel [Patreon page](https://patreon.com/taylorotwell).

### Premium Partners

- **[Vehikl](https://vehikl.com/)**
- **[Tighten Co.](https://tighten.co)**
- **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
- **[64 Robots](https://64robots.com)**
- **[Cubet Techno Labs](https://cubettech.com)**
- **[Cyber-Duck](https://cyber-duck.co.uk)**
- **[Many](https://www.many.co.uk)**
- **[Webdock, Fast VPS Hosting](https://www.webdock.io/en)**
- **[DevSquad](https://devsquad.com)**
- **[Curotec](https://www.curotec.com/services/technologies/laravel/)**
- **[OP.GG](https://op.gg)**
- **[WebReinvent](https://webreinvent.com/?utm_source=laravel&utm_medium=github&utm_campaign=patreon-sponsors)**
- **[Lendio](https://lendio.com)**

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).

## How to use GitHub

- git init
- git add .
- git commit -m "Initial commit"
- git branch -M main
- git remote add origin https://github.com/<username>/<repo-name>.git
- git push -u origin main

## Branching (แตกกิ่ง)

- git checkout -b name of branching

## Token git 
- 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

- ## 1. เตรียมพร้อมบนเบราว์เซอร์

1. เปิดเบราว์เซอร์ในโหมดไม่ระบุตัวตน (**Incognito Mode** หรือ `Ctrl + Shift + N`)
2. เข้าสู่ระบบ [github.com](https://github.com) ด้วยบัญชีของคุณ
3. ไปที่ Repository ของโปรเจกต์
4. กดปุ่มเขียว `<> Code` แล้วคัดลอก URL แบบ HTTPS:

   ```text
   https://github.com/<username>/<repo-name>.git
   ```

## 2. ดึงโปรเจกต์ลงเครื่อง (Clone)

เปิด Command Prompt (CMD) หรือ Terminal:

```bash
# ย้ายไปยังโฟลเดอร์ที่ต้องการวางงาน เช่น Desktop
cd Desktop

# โคลนโปรเจกต์ลงเครื่อง
git clone https://github.com/<username>/<repo-name>.git

# ย้ายเข้าไปในโฟลเดอร์โปรเจกต์
cd <repo-name>
```

## 3. ตั้งค่าผู้ใช้เฉพาะโฟลเดอร์ (Local Config)

> **ข้อควรระวัง:** ห้ามใส่ `--global` เพื่อไม่ให้ชื่อและอีเมลบันทึกค้างไว้ในระบบส่วนกลางของคอมพิวเตอร์สาธารณะ

```bash
git config user.name "ชื่อของคุณ"
git config user.email "อีเมลของคุณที่ผูกกับ GitHub"
```

## 4. แตกกิ่งใหม่เพื่อเริ่มทำงาน (Branching)

สร้างและสลับไปยัง branch ใหม่ทันที:

```bash
# สร้างและสลับไปยัง branch ใหม่ (เปลี่ยน feature/my-work เป็นชื่อที่ต้องการ)
git checkout -b feature/my-work

# ตรวจสอบว่าอยู่บน branch ใหม่แล้ว (จะมีดอกจัน * อยู่หน้าชื่อ branch)
git branch
```

## 5. บันทึกและส่งโค้ดขึ้น GitHub (Commit & Push)

เมื่อแก้ไขงานเสร็จเรียบร้อย ให้กลับมาที่ Terminal:

```bash
# ตรวจสอบรายการไฟล์ที่มีการเปลี่ยนแปลง
git status

# เตรียมไฟล์ทั้งหมดเข้าสู่สถานะบันทึก
git add .

# บันทึกเวอร์ชันพร้อมระบุคำอธิบายงาน
git commit -m "อธิบายงานที่แก้ไขหรือพัฒนาเพิ่ม"

# ส่ง branch ใหม่ออกไปยัง GitHub
git push -u origin feature/my-work
```

**การยืนยันตัวตน:** เมื่อระบบถาม ให้เลือกยืนยันผ่านเบราว์เซอร์ (Browser Login) หรือใช้ Personal Access Token (PAT)

## 6. การรวมโค้ดเข้าสู่ Branch หลัก (Pull Request & Merge บน GitHub)

1. กลับไปที่หน้า Repository บนเบราว์เซอร์ (โหมด Incognito)
2. สังเกตแถบสีเหลืองด้านบน กดปุ่ม **Compare & pull request**
3. ตรวจสอบต้นทาง-ปลายทาง: `base: main` ← `compare: feature/my-work`
4. กรอกหัวข้อและรายละเอียด แล้วกดปุ่มสีเขียว **Create pull request**
5. เมื่อระบบตรวจสอบว่าไม่มี Conflict ให้กด **Merge pull request** ตามด้วย **Confirm merge**
6. กดปุ่มสีเทา **Delete branch** เพื่อลบกิ่งชั่วคราวทิ้ง

## 7. ขั้นตอนความปลอดภัยก่อนลุกออกจากเครื่อง (สำคัญมาก)

ทำตามขั้นตอนนี้ทุกครั้งเพื่อป้องกันการถูกสวมรอยบัญชี:

1. **ลบโฟลเดอร์โปรเจกต์** — ปิดโปรแกรมที่เปิดค้างไว้ทั้งหมด จากนั้นเลือกโฟลเดอร์งานแล้วกด `Shift + Delete` เพื่อลบถาวร
2. **ล้างรหัสผ่านที่ Windows จดจำไว้** — เปิด Command Prompt แล้วพิมพ์คำสั่ง:

   ```dos
   cmdkey /delete:LegacyGeneric:target=git:https://github.com
   ```

