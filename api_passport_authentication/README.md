# Laravel REST API with Token Authentication

## Introduction
This Laravel application serves as a RESTful API with token authentication, offering essential user authentication functionalities such as 
register, login, logout, and profile details.
## Table of Contents

-[Features](#features)

-[Requirements](#requirements)

-[Getting Started](#getting-started)

-[Authentication](#authentication)

-[Endpoint](#endpoints)

-[Response Format](#response-format)


## [Requirements](#requirements)

- PHP 8.1/8.2
- [Composer](https://getcomposer.org/)
- [XAMPP](https://www.apachefriends.org/index.html)/[MAMP](https://www.mamp.info/en/windows/)
- [Insomnia](https://insomnia.rest/download)
- [Postman](https://www.postman.com/)

## Features
- **Token Authentication:** Secure and stateless authentication using API tokens.
- **User Registration:** Allow users to register with the system.
- **User Login:** Authenticate users and generate API tokens.
- **Profile Details:** View user profiles.


## Getting Started

To get started with this API, follow these steps:

1. **Clone the repository**: Clone this repository to your local development environment.
```bash
git clone https://github.com/Victoria-ElenaLazar/API_Passport/tree/main
```
1 **Install dependencies**: navigate to your project root directory and install
the required dependencies using Composer.
```bash
composer install
```
2 **Configure Environment**: Modify your .env file as needed.

3 **Run Migrations**: Run the following command:

```bash
php artisan migrate
```
4  **Generate Passport Keys**: Run the following command:

```bash
php artisan passport:install
```
5  **Start Development Server**: Run the following command:

```bash
php artisan serve
```


## Authentication

This API uses OAuth. To access protected endpoint, include an
**'Authorization'** header with a valid API token. First, you need to:

1 **Sign-up**: In order to use this application you need to register first.
Open Insomnia/Postman, select method POST using the following endpoint:
```bash
http://127.0.0.1:8000/api/oauth/register
```

Write your data in json format. Example:
```bash
{ 
    "name": "first and last name",
    "email": "youremail@email.com",
	"password": "choose a password",
	"password_confirmation": "write the password again"

}
```
2 **Sign in**: Go to headers and complete the fields Key and Value as shown below:
```bash
Content-type        application/json

X-Request-With      XMLHttpRequest
```

Now you have the access-token, with token-type and expiration date.
## Endpoints

Here are some of the main API endpoints you can use:

- 'POST http://127.0.0.1:8000/api/oauth/register': Register as a new user.

- 'POST http://127.0.0.1:8000/api/oauth/login': Sign-in with your credentials.

- 'GET http://127.0.0.1:8000/api/oauth/logout': Log-out from your account.

- 'GET http://127.0.0.1:8000/api/oauth/profile' View your profile details.


## Response-format

API responses are in JSON format.

Example Response:

````
{
    "access_token": "eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiJ9.eyJhdWQiOiIxIiwianRpIjoiMDg2NTcxZTM4NjgyODhlNDk5ZTMxNjc5OTg0NzUwNmVhN2QwYTA4MDQyOThlMDQxNTlhNWRlMmQ2ODhhYzcxYmUwMjE2YTcwNTM0NzU3YmYiLCJpYXQiOjE3MDA3NDU4MzQuMDE3NTc0LCJuYmYiOjE3MDA3NDU4MzQuMDE3NTgyLCJleHAiOjE3MzIzNjgyMzMuOTk2MjksInN1YiI6IjEiLCJzY29wZXMiOltdfQ.btWSNhUgU2x3hlC0iNOyIkPBZarJw8AHnsG7C_HXQQYk959U_CsTSrBuy0W4g2GvrkOTeSGmrehJCeF6Ku5gRkm8dobDulpQCE5yxwiiCvs11VQGU7-qDUo2u2JrvN-8mH7vbm4GgCrf7d4Iq5fz8UaxTcPF6JCksMvilm62C87WLsak1JW3FwknjRayEmLcFmEexR6RWxPxc7OmF-aFBPPftGQT4HtcE7fprioaWimudK2mKgDAQ73uGF2GowbGPPAqFjoGbNgpvZDzKtNdM88TJgq2-W8fKP1LqzPNOjPF2HTDhPXoh0R-v_3xIwPPP5fqZK91dvuMpEs341ReXHp4Uc2rdMaCXLkoHjTe4j5yoAib6ntKGvih5ch_XnWhXu11f1DfRIqTrMlbU6l8Euno8vUxxfo0Yf0torQYtVWs7nX5YgH2MEW5KNybtYbxnohp2q0YF6kyBqInegu2p2rcM_ZMTwmtigw3bXguG2XQH-YcHxoVTlyy8fO3mPJ4Ja0nIdvK9PgXttKwo7p_NEbyhleq9Am2qrbCxJ-tn0l4xBVBqAYEeUnqt-UKnL8DCGEEvcsrw_1wCxGkMvIRgtTIiGdgCY4_qwoTWctTcVn4G_wxnyYLwe9eEdurUzKYXJHKtbCJJVH6jsJSXHHnsQoWOCewn7LaKjHtooj-kh8",
    "token_type": "Bearer",
    "expires_at": "2023-12-07"
}
````


