<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>


# 🏫 MHCode Academy

## 💻 Overview

**MHCode Academy** is an online learning platform designed to provide high-quality technology education to students around the world.  
It offers a wide range of courses in different technological fields, helping learners gain practical skills and prepare for real-world careers.

### 🎯 Main Objectives
- Empower students with practical tech skills.  
- Provide structured learning paths from beginner to advanced levels.  
- Create a user-friendly environment for both students and instructors.  

---

## 🏠 Home Page

The home page introduces the user to MHCode Academy and includes:

- Overview of the academy’s **mission, vision, and goals**.  
- **Featured highlights** of the academy (unique features, technologies taught, and student success stories).  
- **Student reviews and ratings** from previous learners.  
- **Social media links and icons** for connecting with the academy.  
- General information about the academy’s purpose and educational philosophy.  

---

## 📚 Courses Page

Students can easily browse and filter available courses.

### Features:
- **View all courses** offered by the academy.  
- **Filter courses** by category (e.g., Web Development, Cybersecurity, AI) and difficulty level (Beginner, Intermediate, Advanced).  
- **View course details**, including:
  - Introductory video  
  - Instructor information  
  - Course duration and lecture count  
  - Price and enrollment info  
  - Student comments, reviews, and ratings  

---

## 📰 Blog Page

The Blog section contains educational articles and updates from the tech world.

### Features:
- **Featured highlights**: Best practices, AI and coding, career growth, and more.  
- **Popular categories** and **tags** for easy navigation.  
- **Detailed blog posts** on technology, programming tips, and industry news.  

---

## 🧭 About Us Page

This section provides insights into the academy’s background and philosophy.

### Includes:
- Academy goals  
- Mission and vision statements  
- Core values  
- Learning methodology  
- Instructor profiles  
- Student testimonials and feedback  

---

## 📞 Contact Us Page

Students who wish to enroll in a course can do so through a simple form.

### Registration Process:
1. Go to the **Contact Us** page.  
2. Fill out the form with:
   - Name  
   - Email  
   - Phone number  
   - Course name  
3. Submit the form.  
4. The administrator receives the request and manages the **payment and registration process**.  

---



## 📸 Project Screenshots

### 🏠 Home Page  
![Home Page](https://i.imgur.com/1e4JWJY.png)

### 📚 Courses Page  
![Course Page](https://i.imgur.com/DBVgaCU.png)

### 👤 Admin - User Management  
![User Page - Admin](https://i.imgur.com/XVPkiS2.png)

### 🛍️ Admin - Product Management  
![Product Page - Admin](https://i.imgur.com/Ncy3iEK.png)

### 🔐 Login Page  
![Login Page](https://i.imgur.com/qI1ZqEx.png)



---


## ⚙️ Admin Dashboard

The Admin Dashboard is a powerful tool for managing all content on the platform.  
All data (courses, reviews, blog posts, etc.) is **dynamic**, meaning it can be changed from the dashboard without modifying code.

### Admin Features:
- Add, edit, or delete courses.  
- Manage course prices, descriptions, and media.  
- Approve or remove student reviews.  
- Post and update blog content.  
- Manage instructor and student information.  

---

## 🔐 Admin Role & Access Permissions

MHCode Academy implements a **Role-Based Access Control (RBAC)** system to secure administrative actions.

### Roles:
1. **Admin**  
   - Full control over the entire website and dashboard.  
   - Can manage users, instructors, courses, and settings.  
   - Approves or removes content.  

2. **Instructor**  
   - Can create and manage their own courses.  
   - View student feedback and grades for their courses.  
   - Cannot modify other instructors’ courses or system settings.  

3. **Student**  
   - Can view and enroll in courses.  
   - Post reviews and ratings after completion.  
   - Can edit their own profile.  

### Access Features:
- **Authentication**: Secure login for all roles.  
- **Authorization middleware** in Laravel ensures each user only accesses allowed sections.  
- **Audit logs** to track changes made by administrators.  

---

## 🛠️ Technologies Used

- **Laravel** (Backend Framework)  
- **Blade Templates** (Frontend Rendering)  
- **MySQL** (Database)  
- **Bootstrap** (Styling)  
- **JavaScript** (Interactivity)  
- **Authentication System** (Laravel Breeze / Fortify / Jetstream — depending on setup)  

---

## 🚀 Future Enhancements

- Add an **online payment gateway** for direct enrollments.  
- Enable **live chat support** with instructors.  
- Integrate **AI-based course recommendations**.  
- Add **certificate generation** after course completion.  
