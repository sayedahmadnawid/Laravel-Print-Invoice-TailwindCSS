# Laravel-PDF-Tailwind

## Project Overview
This project is an open-source Laravel application that aims to enhance the PDF generation capabilities in Laravel by leveraging the __laravel-pdf__ package from Spatie. The primary goal is to overcome the limitations of the __dompdf__ package, which only supports CSS2. By integrating __laravel-pdf__, this project provides advanced support for CSS3, including modern layout techniques like Flexbox and Grid, as well as full compatibility with TailwindCSS. This results in a more powerful and flexible PDF generation solution for Laravel developers.

## 日本語の説明
このプロジェクトは、LaravelのPDF生成機能を強化するためのオープンソースのLaravelアプリケーションです。Spatieの __laravel-pdf__ パッケージを活用しています。主な目的は、CSS2しかサポートしていない __dompdf__ パッケージの制限を克服することです。__laravel-pdf__ を統合することで、このプロジェクトはCSS3の高度なサポートを提供します。これには、FlexboxやGridのような最新のレイアウト技術、およびTailwindCSSとの完全な互換性が含まれます。これにより、Laravel開発者にとって、より強力で柔軟なPDF生成ソリューションを提供します。

## Demo
The generated pdf document used Tailwind CSS with flex and grid layouts.
![English](https://github.com/sayedahmadnawid/Laravel-PDF-Tailwind/assets/12025673/469e8a14-e684-4bd2-91ec-dfd4b17d925a)
![Japanese](https://github.com/sayedahmadnawid/Laravel-PDF-Tailwind/assets/12025673/adec0229-4710-4eb2-b1a8-169aa00e77f1)
## Key Features
1. __CSS3 Support__
   - __Flexbox:__ Utilize Flexbox for creating flexible and responsive layouts within your PDFs.
   - __Grid Layouts:__ Design complex and precise layouts using CSS Grid.
   - __Advanced Styling:__ Leverage modern CSS3 features that are not supported by dompdf.
   - __Google Fonts:__ Including any Google Fonts from [Officail Google Font site](https://fonts.google.com)

2. __TailwindCSS Integration__
    - __Utility-First CSS:__ Use TailwindCSS utility classes to style your PDF content.
    - __Consistency:__ Maintain a consistent design language between your web application and generated PDFs.
    - __Customization:__ Easily customize the look and feel of your PDFs using TailwindCSS configuration.

3. __Enhanced PDF Generation__
   - __Better Performance:__ Improved performance with laravel-pdf in handling complex CSS and large documents.
   - __Ease of Use:__ Simplified API for generating PDFs, reducing the complexity for developers.
   - __Advanced Features:__ Support for modern web design techniques in PDF outputs.

## Project Purpose
The primary purpose of this project is to provide Laravel developers with a robust and flexible tool for generating PDFs that look as good as their web counterparts. By moving away from __dompdf__ and utilizing the more advanced __laravel-pdf__ package, this project enables developers to take full advantage of modern CSS features and the powerful TailwindCSS framework. This solution is ideal for applications that require high-quality, well-styled PDFs such as invoices, reports, and marketing materials.

## Why Use This Project?

- __Modern Design:__ If your application uses modern CSS3 features and TailwindCSS, this project ensures that your PDFs can match your web styling perfectly.
- __Ease of Implementation:__ Quickly integrate PDF generation into your Laravel project with minimal setup.
- __Flexibility:__ Tailor your PDF designs with the full power of CSS3 and TailwindCSS, without being constrained by the limitations of older libraries.

 ## Routes Explanation 

This project includes two routes to demonstrate its capabilities:

1. __Default Route (/)__

- Displays a sample invoice using TailwindCSS with Japanese text.
- This demonstrates the ability to handle multi-language support and complex layouts in PDFs.
- It is possible to include any Google fonts using CDN

2. __English Sample Route (/english)__

- Displays a sample TailwindCSS page design.
- Showcases the versatility of TailwindCSS in styling PDF content, ensuring that the same design principles used in web development can be applied to PDF generation.

## Getting Started
1. __Installation__
   - Clone the repository: __git clone https://github.com/sayedahmadnawid/Laravel-PDF-Tailwind.git__
   - Navigate to the project directory: `cd Laravel-PDF-Tailwind`
   - Install dependencies: `composer install`
   - Set up environment variables: `cp .env.example .env`.
2. __Third Party Package Installation__
   -  Under the hood it uses Chromium (via Browsershot) to generate PDFs from Blade views. for more information and installation guidance, please visit the [spatie officail website](https://spatie.be/docs/browsershot/v4/requirements).


## Conclusion

This project aims to bridge the gap between modern web design and PDF generation in Laravel. By using laravel-pdf and TailwindCSS, developers can produce high-quality, stylish PDFs that are consistent with their web applications, providing a seamless user experience across different mediums.

## 結論
このプロジェクトは、最新のウェブデザインとLaravelでのPDF生成のギャップを埋めることを目指しています。laravel-pdfとTailwindCSSを使用することで、開発者はウェブアプリケーションと一貫性のある、高品質でスタイリッシュなPDFを作成することができます。これにより、異なるメディア間でシームレスなユーザー体験を提供します
