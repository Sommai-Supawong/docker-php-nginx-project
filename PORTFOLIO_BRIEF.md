คุณคือ Senior Frontend Developer + Creative Web Designer

งานของคุณคือสร้าง **Personal Portfolio Website** สำหรับเจ้าของ Portfolio คนนี้ โดยใช้ข้อมูลและผลงานที่ให้ด้านล่าง

เป้าหมายคือทำ Portfolio ที่ดูทันสมัย มีความเป็น Developer จริง ไม่ดูเหมือน Template สำเร็จรูปหรือเว็บที่ AI generate มาแบบทั่วไป และสามารถนำไปใช้สมัครงาน สมัคร Internship ส่งอาจารย์ หรือใช้เป็น Personal Website ได้จริง

---

# IMPORTANT REQUIREMENT

สร้างเว็บไซต์เป็น **ไฟล์เดียวเท่านั้น**

```text
index.html
```

ทุกอย่างต้องอยู่ภายในไฟล์เดียว ได้แก่

* HTML
* CSS
* JavaScript
* Animation
* SVG Icons
* Responsive Styles

ห้ามสร้างไฟล์ CSS หรือ JS แยก

ไม่ใช้ React
ไม่ใช้ Next.js
ไม่ใช้ Vite
ไม่ใช้ npm
ไม่ต้องมี build process

เปิด `index.html` ใน browser แล้วต้องใช้งานได้ทันที

สามารถใช้ CDN เฉพาะกรณีจำเป็นจริง ๆ แต่ควรทำให้เว็บพึ่ง dependency ภายนอกให้น้อยที่สุด

---

# PORTFOLIO OWNER

Portfolio นี้เป็นของนักศึกษาสาย Developer ที่สนใจการสร้าง Web Application, Full-stack Development, UI/UX, Creative Frontend และการนำ AI มาใช้กับ Product

บุคลิกของ Portfolio:

* Developer
* Full-stack Developer
* Creative Frontend Developer
* UI Engineering
* Product-oriented Developer
* สนใจ AI-powered Application
* ชอบทดลองเทคโนโลยีใหม่
* ชอบสร้าง Prototype และ Product ที่ใช้งานได้จริง
* ให้ความสำคัญกับ User Experience ไม่ใช่แค่เขียน Code ให้ทำงานได้

อย่าสร้างข้อมูลส่วนตัว เช่น Email, เบอร์โทร, LinkedIn หรือ GitHub URL ขึ้นมาเอง

ถ้าไม่พบข้อมูลจริง ให้ใช้ placeholder ที่แก้ภายหลังได้ เช่น

```text
your@email.com
GitHub
LinkedIn
```

หรือใส่ TODO comment ไว้ใน code

---

# DESIGN DIRECTION

ต้องการดีไซน์แนว

**Modern Developer Portfolio + Editorial Tech + Liquid Glass**

ภาพรวมให้รู้สึกว่าเป็น Portfolio ของ Developer รุ่นใหม่ที่เข้าใจทั้ง Technology และ Design

Mood:

* Modern
* Clean
* Premium
* Experimental เล็กน้อย
* Technology
* Creative
* Minimal
* Professional

หลีกเลี่ยง:

* Gradient เยอะเกินไป
* Neon Cyberpunk จ๋า
* AI-style purple gradient
* ไอคอนรูปสมอง AI
* Robot
* Sparkle เยอะ ๆ
* Design ที่เหมือน SaaS Template ทั่วไป
* Glassmorphism ทุกจุดจนอ่านยาก
* Animation เยอะจนรบกวนการอ่าน

---

# COLOR SYSTEM

ใช้ Dark Theme เป็นหลัก

Background:

```css
#0B0B0C
#101012
#151517
```

Primary Text:

```css
#F5F5F5
```

Secondary Text:

```css
#A7A7AD
```

Accent สามารถใช้:

* Soft Blue
* Ice Blue
* Sage Green
* White

เช่น

```css
#7EB6FF
#A8C7FA
#B7D7C0
```

อย่าใช้ Gradient เป็นพื้นหลังหลักทั้งหน้า

ใช้ Gradient ได้เฉพาะ light effect หรือ subtle glow เล็กน้อย

---

# TYPOGRAPHY

Typography ต้องเป็นจุดเด่นของเว็บไซต์

Heading:

* Bold
* Large
* Editorial
* Modern

Body:

* อ่านง่าย
* spacing ดี
* ไม่เล็กเกินไป

รองรับภาษาไทยและภาษาอังกฤษ

Font Stack แนะนำ:

```css
font-family:
"Inter",
"Sarabun",
system-ui,
sans-serif;
```

---

# PAGE STRUCTURE

เว็บไซต์เป็น Single Page Portfolio

ให้มี Sections ต่อไปนี้

1. Hero
2. About
3. Selected Projects
4. Skills / Tech Stack
5. Development Philosophy
6. Experience / Journey
7. Contact
8. Footer

Navbar เป็น Sticky / Floating Navigation

---

# 01 HERO SECTION

Hero ต้องเป็นส่วนที่โดดเด่นที่สุด

Layout ไม่ควรเป็น Template แบบ

รูปด้านซ้าย
ข้อความด้านขวา

ให้ใช้แนว Editorial Layout ที่ดูมี Character มากกว่า

ตัวอย่าง Content:

Eyebrow:

```text
FULL-STACK DEVELOPER / CREATIVE FRONTEND
```

Headline:

```text
Building digital
experiences that
feel alive.
```

หรือสามารถปรับ Copy ให้เหมาะสมกว่าได้ แต่ต้องไม่ดูเวอร์เกินจริง

Description:

```text
I build modern web applications that combine
engineering, thoughtful interaction, and product-focused design.
```

CTA:

```text
Explore My Work
Contact Me
```

เพิ่ม Status เล็ก ๆ เช่น

```text
Available for Internship & Collaboration
```

สามารถมี decorative floating keywords เช่น

```text
FULLSTACK
UI ENGINEERING
WEBGL
AI
PRODUCT
CREATIVE CODE
```

แต่ต้อง subtle

---

# HERO VISUAL

แทนที่จะใช้ภาพคน placeholder ให้สร้าง visual จาก HTML/CSS/SVG

เช่น

* Interactive glass object
* Floating code window
* Abstract 3D-style card
* Developer workspace visualization
* Browser mockup
* Grid / technical diagram
* Mouse reactive element

ให้มี animation เบา ๆ

เช่น

* parallax
* mouse movement
* floating
* blur light movement
* depth effect

ห้ามทำให้หนักเครื่อง

ต้องรองรับ `prefers-reduced-motion`

---

# 02 ABOUT

หัวข้อ:

```text
About Me
```

เนื้อหาแนวประมาณ:

```text
I enjoy turning ideas into interactive digital products.

My work sits between software engineering, interface design,
and experimentation. I care about how a system works,
but also how it feels when someone uses it.

I usually work across the stack — from designing interfaces
and frontend interactions to building APIs, databases,
and deployment workflows.
```

สามารถปรับภาษาให้เป็นธรรมชาติและดูเป็น Portfolio มืออาชีพ

อย่าเขียนโอ้อวดเกินจริง

---

# 03 SELECTED PROJECTS

ส่วน Project เป็น Highlight สำคัญ

สร้าง Project Card ที่ดู Premium

อย่าใช้ Card Grid แบบธรรมดาทั้งหมด

แนะนำสลับ Layout เช่น

Project 01 ใหญ่
Project 02-03 side by side
Project 04 Full width

แต่ต้อง Responsive

---

# PROJECT 01

ชื่อ:

```text
THAI CONTEXT
```

Category:

```text
AI / NLP / Full-stack / Language Technology
```

Description:

แพลตฟอร์มพจนานุกรมภาษาไทยแบบ Context-Aware ที่เปลี่ยนประสบการณ์จากการต้องรู้คำก่อนค้น มาเป็นการเริ่มจาก "สิ่งที่ผู้ใช้ต้องการสื่อ"

ระบบรองรับ Meaning-first Search, Semantic Retrieval, Context-aware Recommendation, การเปรียบเทียบคำ และ Evidence-grounded Response

แนวคิดสำคัญคือ AI ช่วยค้นหาและจัดอันดับข้อมูล แต่แหล่งข้อมูลอย่างเป็นทางการยังคงเป็น Source of Truth

Tech Stack:

```text
Next.js
TypeScript
React
React Three Fiber
Drei
GSAP
NestJS
Python
FastAPI
Hybrid Semantic Retrieval
Docker
```

Highlights:

```text
Meaning-first Search
Context-aware Ranking
Evidence-grounded Response
Hybrid Semantic Retrieval
Interactive 3D Hero
```

---

# PROJECT 02

ชื่อ:

```text
Fullstack Product Management
```

Category:

```text
Full-stack Web Application
```

Description:

ระบบจัดการสินค้าแบบ Full-stack สำหรับเพิ่ม แก้ไข ลบ และจัดการข้อมูลสินค้า พร้อมข้อมูลราคาและจำนวนสินค้า

Frontend เน้น UI แบบ modern dark interface พร้อม interaction และ responsive layout

Backend ใช้ REST API และเชื่อมต่อฐานข้อมูล PostgreSQL

Tech Stack:

```text
React
Vite
Node.js
Express
Sequelize
PostgreSQL
Docker
Vercel
Render
```

Highlights:

```text
REST API
Product Management
Inventory Quantity
Responsive UI
Cloud Deployment
```

---

# PROJECT 03

ชื่อ:

```text
MoodMovie
```

Category:

```text
Python / OOP / Recommendation
```

Description:

Movie recommendation application ที่แนะนำภาพยนตร์ตามอารมณ์ของผู้ใช้

พัฒนาด้วยแนวคิด Object-Oriented Programming และ OOAD เพื่อแยก responsibility ของระบบอย่างเป็นโครงสร้าง

Tech Stack:

```text
Python
Flask
OOP
OOAD
HTML
CSS
Render
```

Highlights:

```text
Mood-based Recommendation
Object-Oriented Design
Class Architecture
Use Case Design
Deployment
```

---

# PROJECT 04

ชื่อ:

```text
PayBridge
```

Category:

```text
Blockchain / Payment Prototype
```

Description:

Prototype ระบบรับและโอนสินทรัพย์ดิจิทัลที่ออกแบบมาเพื่อทดลองแนวคิด Multi-currency Payment

แนวคิดของระบบครอบคลุม Bitcoin payment และการเชื่อมต่อ Web3 wallet สำหรับการรับส่ง ETH บน Ethereum Sepolia Testnet

Supported concept:

```text
THB
USD
BTC
ETH
```

Features / Concepts:

```text
Bitcoin Payment
Wallet Integration
MetaMask
Ethereum
Sepolia Testnet
Multi-currency Conversion
Transaction Flow
```

อย่ากล่าวอ้างว่าเป็น Production Financial Platform

ให้ระบุว่าเป็น Prototype / Educational Project

---

# PROJECT CARD INTERACTION

เมื่อ hover Project Card:

* Card ยกขึ้นเล็กน้อย
* subtle perspective / 3D tilt
* border highlight
* image/visual scale เล็กน้อย
* project index animation

ห้าม transform แรง

ใช้ transition ประมาณ:

```css
cubic-bezier(.22,1,.36,1)
```

---

# PROJECT VISUAL

เนื่องจากไม่มีภาพ Project จริง

อย่าใช้ Stock Image

สร้าง abstract visual ภายใน Card ด้วย

* Browser UI
* Dashboard mockup
* Code panel
* Search interface
* Architecture diagram
* Gradient mesh แบบ subtle
* SVG illustration

แต่ละ Project ต้องมี visual identity ไม่เหมือนกันทั้งหมด

ตัวอย่าง:

THAI CONTEXT:
Search UI / floating Thai words / semantic connection

Product Management:
Inventory dashboard

MoodMovie:
Movie cards / mood selection

PayBridge:
Wallet / transaction graph

---

# 04 SKILLS / TECH STACK

แบ่ง Skills เป็น Categories

### Frontend

```text
HTML
CSS
JavaScript
TypeScript
React
Next.js
Vite
React Three Fiber
GSAP
Responsive Design
```

### Backend

```text
Node.js
Express
NestJS
Python
Flask
FastAPI
REST API
```

### Database / Infrastructure

```text
PostgreSQL
Sequelize
Docker
Render
Vercel
Git
GitHub
```

### Areas of Interest

```text
Full-stack Development
Creative Frontend
UI Engineering
Web Animation
3D Web
AI-powered Products
Semantic Search
Blockchain
Product Design
```

แสดง Tech Stack แบบ Typography / Tags

ไม่จำเป็นต้องใส่ Progress Bar เช่น

```text
React 95%
JavaScript 90%
```

เพราะดูไม่น่าเชื่อถือ

---

# 05 DEVELOPMENT PHILOSOPHY

สร้าง Section เล็ก ๆ ที่สะท้อนแนวคิดการทำงาน

Headline:

```text
Code should work.
Interfaces should feel right.
Products should solve something.
```

หรือ Copy ที่ใกล้เคียง

สร้าง 3 หลักการ:

### Engineering

สร้างระบบที่ maintainable และมี structure ที่เข้าใจได้

### Experience

ให้ความสำคัญกับ interaction, readability และ user experience

### Product Thinking

ก่อนเพิ่ม feature ให้ถามว่ามันแก้ปัญหาอะไรให้ผู้ใช้

ใช้ข้อความกระชับ

---

# 06 JOURNEY

สร้าง Timeline แนว Developer Journey

ไม่ต้องใส่ปีหรือข้อมูลการศึกษาที่ไม่มีข้อมูลจริง

ใช้เป็น:

```text
Explore
↓
Build
↓
Break
↓
Learn
↓
Refine
```

อธิบายแนวคิดสั้น ๆ ว่าการพัฒนาเกิดจากการทดลอง สร้าง project แก้ปัญหา และ iterate

สามารถทำเป็น Horizontal Timeline บน Desktop และ Vertical บน Mobile

---

# 07 CONTACT

Headline:

```text
Have an idea?
Let's build something.
```

หรือ

```text
Let’s create something useful.
```

Description:

```text
I'm interested in internships, collaborations,
creative development, and interesting web projects.
```

Buttons:

```text
Email Me
GitHub
LinkedIn
```

ถ้าไม่มี URL จริง

ห้ามสร้าง URL ปลอม

ให้ใช้

```html
href="#"
```

และ comment:

```html
<!-- TODO: Replace with actual GitHub URL -->
```

---

# NAVBAR

Floating Navbar

Desktop:

```text
[Logo / Name]

About
Projects
Skills
Contact
```

ด้านขวาอาจมี:

```text
Let's Talk ↗
```

ใช้ Liquid Glass แบบ subtle

เช่น

```css
backdrop-filter: blur(20px);
background: rgba(20,20,22,.65);
border: 1px solid rgba(255,255,255,.08);
```

Navbar ตอน scroll ให้ย่อเล็กน้อย

Animation ต้อง smooth

Mobile ให้มี menu button

---

# LOGO

สร้าง Logo/Typography Mark จาก Initial หรือชื่อ placeholder

ห้ามสร้างชื่อจริงขึ้นมาเองถ้าไม่มีข้อมูล

สามารถใช้:

```text
PORTFOLIO.
```

หรือ

```text
DEV / 26
```

เป็น temporary identity

---

# INTERACTION

เพิ่ม JavaScript Interaction แบบ Vanilla JS

ต้องมี:

### Smooth Scroll

Navbar click แล้ว scroll ไป section

### Scroll Reveal

Element ค่อย ๆ reveal เมื่อเข้า viewport

ใช้:

```text
IntersectionObserver
```

อย่าใช้ scroll event หนัก ๆ

### Cursor Interaction

Desktop สามารถมี custom cursor แบบ subtle

เช่นวงกลมเล็กตาม mouse

แต่ Mobile ต้องปิด

### Project Tilt

Project Card มี subtle tilt ตาม mouse

ต้องมี limit ไม่เกินประมาณ

```text
rotateX ±3deg
rotateY ±3deg
```

### Navbar State

เมื่อ Scroll ให้ Navbar เปลี่ยน style เล็กน้อย

### Hero Mouse Parallax

Visual ใน Hero ขยับเบา ๆ ตาม mouse

---

# ANIMATION PRINCIPLE

Animation ต้องรู้สึก

```text
Smooth
Subtle
Intentional
Premium
```

ไม่ใช้ Animation เพื่อโชว์ Effect อย่างเดียว

Duration แนะนำ:

```text
300ms
500ms
700ms
```

Easing:

```css
cubic-bezier(.22,1,.36,1)
```

Scroll reveal:

```text
opacity
translateY
blur
```

แต่ blur ไม่เกินไป

---

# BACKGROUND DETAILS

สร้าง Background ด้วย CSS

เช่น

* subtle grid
* noise simulation
* radial light
* lines
* soft glow

ไม่ใช้รูป external

ตัวอย่าง:

```text
technical grid
editorial lines
subtle blue glow
```

ให้ Background มี Depth แต่ไม่แย่ง Content

---

# RESPONSIVE DESIGN

ต้องทดสอบอย่างน้อย:

```text
1440px
1024px
768px
430px
375px
```

Mobile:

* Font ไม่ใหญ่จนล้น
* Project Card เรียงเป็น Column
* Navigation ใช้งานง่าย
* Button กดง่าย
* ไม่มี Horizontal Scroll
* Hero Height ไม่ผิดบน Mobile Browser

ใช้

```css
min-height: 100svh;
```

เมื่อเหมาะสม

---

# ACCESSIBILITY

ต้องมี

```text
semantic HTML
aria-label
keyboard navigation
focus-visible
alt / aria descriptions
sufficient contrast
prefers-reduced-motion
```

Button และ Link ต้องใช้ keyboard ได้

---

# PERFORMANCE

หลีกเลี่ยง

* Animation loop จำนวนมาก
* Canvas หนัก
* External video
* Huge image
* requestAnimationFrame หลาย loop

เว็บไซต์ควรเปิดเร็ว

---

# SEO

ใส่

```html
<title>
<meta name="description">
<meta name="viewport">
<meta name="theme-color">
```

สร้าง favicon แบบ Data URI หรือ SVG inline ได้ถ้าเหมาะสม

---

# CODE QUALITY

Code ต้องจัด Section ชัดเจน

ตัวอย่าง:

```html
<!-- =========================
     HERO
========================= -->
```

CSS แบ่งเป็น

```text
ROOT
RESET
TYPOGRAPHY
LAYOUT
NAVIGATION
HERO
PROJECTS
SKILLS
CONTACT
RESPONSIVE
```

JavaScript แบ่ง function ชัดเจน

อย่าเขียน JavaScript ทุกอย่างรวมกันมั่ว ๆ

---

# FINAL RESULT

หลังทำเสร็จ:

1. ตรวจสอบ HTML syntax
2. ตรวจสอบ CSS
3. ตรวจสอบ JavaScript runtime error
4. ตรวจสอบ Responsive
5. ตรวจสอบ mobile navigation
6. ตรวจสอบ smooth scrolling
7. ตรวจสอบ Project interaction
8. ตรวจสอบ prefers-reduced-motion
9. ตรวจสอบไม่มี horizontal overflow
10. ตรวจสอบว่าเปิด `index.html` โดยตรงแล้วทำงานได้

จากนั้นปรับ Polish รอบสุดท้าย

เน้น:

* spacing
* typography
* visual hierarchy
* alignment
* animation smoothness
* readability
* consistency

เป้าหมายสุดท้ายคือให้คนเปิด Portfolio แล้วรู้สึกว่า

```text
"คนนี้เป็น Developer ที่เขียนระบบได้
และเข้าใจ Product + UI จริง"
```

ไม่ใช่

```text
"Portfolio Template ที่เปลี่ยนแค่ชื่อ"
```

สร้างไฟล์:

```text
index.html
```

ให้พร้อมใช้งานทันที
