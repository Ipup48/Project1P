<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="ภาควิชาวิศวกรรมซอฟต์แวร์ - มหาวิทยาลัยราชภัฏนครปฐม">
    <meta name="keywords" content="วิศวกรรมซอฟต์แวร์, นครปฐม, มหาวิทยาลัยราชภัฏนครปฐม">
    
    <title>@yield('title', 'วิศวกรรมซอฟต์แวร์ - นครปฐม')</title>
    
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Prompt:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    
    <!-- Styles -->
    <style>
        /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */
        html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}code,kbd,pre,samp{font-family:monospace,monospace;font-size:1em}small{font-size:80%}sub,sup{font-size:75%;line-height:0;position:relative;vertical-align:baseline}sub{bottom:-0.25em}sup{top:-0.5em}img{border-style:none}button,input,optgroup,select,textarea{font-family:inherit;font-size:100%;line-height:1.15;margin:0}button,input{overflow:visible}button,select{text-transform:none}button,[type="button"],[type="reset"],[type="submit"]{-webkit-appearance:button}button::-moz-focus-inner,[type="button"]::-moz-focus-inner,[type="reset"]::-moz-focus-inner,[type="submit"]::-moz-focus-inner{border-style:none;padding:0}button:-moz-focusring,[type="button"]:-moz-focusring,[type="reset"]:-moz-focusring,[type="submit"]:-moz-focusring{outline:1px dotted ButtonText}fieldset{padding:.35em .75em .625em}legend{box-sizing:border-box;color:inherit;display:table;max-width:100%;padding:0;white-space:normal}progress{vertical-align:baseline}textarea{overflow:auto}[type="checkbox"],[type="radio"]{box-sizing:border-box;padding:0}[type="number"]::-webkit-inner-spin-button,[type="number"]::-webkit-outer-spin-button{height:auto}[type="search"]{-webkit-appearance:textfield;outline-offset:-2px}[type="search"]::-webkit-search-decoration{-webkit-appearance:none}::-webkit-file-upload-button{-webkit-appearance:button;font:inherit}details{display:block}summary{display:list-item}template{display:none}[hidden]{display:none}
        
        /* Custom Styles */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
        body {
            font-family: 'Prompt', sans-serif;
            line-height: 1.6;
            color: #333;
            background-color: #f8f9fa;
        }
        
        .container {
            width: 100%;
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 15px;
        }
        
        /* Header Styles */
        header {
            background-color: #fff;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
            position: sticky;
            top: 0;
            z-index: 1000;
        }
        
        .header-container {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 15px 0;
        }
        
        .logo {
            display: flex;
            align-items: center;
        }
        
        .logo img {
            height: 60px;
            margin-right: 15px;
        }
        
        .logo-text h1 {
            font-size: 1.5rem;
            font-weight: 600;
            color: #2c3e50;
            margin: 0;
        }
        
        .logo-text p {
            font-size: 0.9rem;
            color: #7f8c8d;
            margin: 0;
        }
        
        nav ul {
            display: flex;
            list-style: none;
        }
        
        nav ul li {
            margin-left: 25px;
        }
        
        nav ul li a {
            text-decoration: none;
            color: #2c3e50;
            font-weight: 500;
            font-size: 1rem;
            transition: color 0.3s;
        }
        
        nav ul li a:hover {
            color: #e74c3c;
        }
        
        nav ul li a.active {
            color: #e74c3c;
            border-bottom: 2px solid #e74c3c;
        }
        
        /* Main Content */
        main {
            min-height: calc(100vh - 160px);
            padding: 30px 0;
        }
        
        .page-header {
            text-align: center;
            margin-bottom: 40px;
        }
        
        .page-header h1 {
            font-size: 2.5rem;
            color: #2c3e50;
            margin-bottom: 15px;
        }
        
        .page-header p {
            font-size: 1.2rem;
            color: #7f8c8d;
            max-width: 700px;
            margin: 0 auto;
        }
        
        /* Section Styles */
        section {
            background-color: #fff;
            border-radius: 8px;
            padding: 30px;
            margin-bottom: 30px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.05);
        }
        
        section h2 {
            font-size: 2rem;
            color: #2c3e50;
            margin-bottom: 20px;
            padding-bottom: 10px;
            border-bottom: 2px solid #eee;
        }
        
        section h3 {
            font-size: 1.5rem;
            color: #2c3e50;
            margin: 20px 0 15px;
        }
        
        section p {
            margin-bottom: 15px;
            font-size: 1.1rem;
            line-height: 1.7;
        }
        
        /* Card Styles */
        .card-container {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
            gap: 25px;
            margin-top: 30px;
        }
        
        .card {
            background: #fff;
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 3px 10px rgba(0,0,0,0.1);
            transition: transform 0.3s, box-shadow 0.3s;
        }
        
        .card:hover {
            transform: translateY(-5px);
            box-shadow: 0 5px 20px rgba(0,0,0,0.15);
        }
        
        .card img {
            width: 100%;
            height: 300px;
            object-fit: cover;
        }
        
        .card-content {
            padding: 20px;
        }
        
        .card h3 {
            font-size: 1.3rem;
            margin-bottom: 10px;
            color: #2c3e50;
        }
        
        .card p {
            font-size: 1rem;
            color: #7f8c8d;
            margin-bottom: 0;
        }
        
        /* Button Styles */
        .btn {
            display: inline-block;
            padding: 12px 25px;
            background-color: #e74c3c;
            color: white;
            text-decoration: none;
            border-radius: 5px;
            font-weight: 500;
            transition: background-color 0.3s;
            border: none;
            cursor: pointer;
            font-size: 1rem;
        }
        
        .btn:hover {
            background-color: #c0392b;
        }
        
        /* Footer Styles */
        footer {
            background-color: #2c3e50;
            color: #ecf0f1;
            padding: 30px 0;
            text-align: center;
        }
        
        .footer-content {
            display: flex;
            flex-direction: column;
            align-items: center;
        }
        
        .footer-logo {
            margin-bottom: 20px;
        }
        
        .footer-logo img {
            height: 50px;
        }
        
        .footer-text {
            max-width: 600px;
            margin-bottom: 20px;
        }
        
        .footer-links {
            display: flex;
            justify-content: center;
            margin-bottom: 20px;
        }
        
        .footer-links a {
            color: #ecf0f1;
            margin: 0 15px;
            text-decoration: none;
        }
        
        .footer-links a:hover {
            color: #e74c3c;
        }
        
        .copyright {
            font-size: 0.9rem;
            color: #bdc3c7;
        }
        
        /* Responsive Design */
        @media (max-width: 768px) {
            .header-container {
                flex-direction: column;
                text-align: center;
            }
            
            .logo {
                margin-bottom: 15px;
            }
            
            nav ul {
                flex-wrap: wrap;
                justify-content: center;
            }
            
            nav ul li {
                margin: 5px 10px;
            }
            
            .card-container {
                grid-template-columns: 1fr;
            }
            
            .page-header h1 {
                font-size: 2rem;
            }
            
            .page-header p {
                font-size: 1rem;
            }
        }
    </style>
    
    <!-- Custom CSS -->
    <link href="{{ asset('css/se-custom.css') }}" rel="stylesheet">
    
    @yield('styles')
</head>
<body>
    <header>
        <div class="container header-container">
            <div class="logo">
                <img src="https://pws.npru.ac.th/suphitcha/data/images/se%281%29.png" alt="โลโก้ SE NPRU">
                <div class="logo-text">
                    <h1>วิศวกรรมซอฟต์แวร์</h1>
                    <p>มหาวิทยาลัยราชภัฏนครปฐม</p>
                </div>
            </div>
            <nav>
                <ul>
                    <li><a href="{{ route('se.home') }}" class="{{ request()->routeIs('se.home') ? 'active' : '' }}">หน้าแรก</a></li>
                    <li><a href="{{ route('se.about') }}" class="{{ request()->routeIs('se.about') ? 'active' : '' }}">เกี่ยวกับเรา</a></li>
                    <li><a href="{{ route('se.courses') }}" class="{{ request()->routeIs('se.courses') ? 'active' : '' }}">หลักสูตร</a></li>
                    <li><a href="{{ route('se.faculty') }}" class="{{ request()->routeIs('se.faculty') ? 'active' : '' }}">อาจารย์ประจำสาขา</a></li>
                    <li><a href="{{ route('se.news') }}" class="{{ request()->routeIs('se.news') || request()->routeIs('se.news.show') ? 'active' : '' }}">ข่าวสารและกิจกรรม</a></li>
                    <li><a href="{{ route('se.contact') }}" class="{{ request()->routeIs('se.contact') ? 'active' : '' }}">ติดต่อ</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <main>
        <div class="container">
            @yield('content')
        </div>
    </main>

    <footer>
        <div class="container">
            <div class="footer-content">
                <div class="footer-text">
                    <p>ภาควิชาวิศวกรรมซอฟต์แวร์<br>มหาวิทยาลัยราชภัฏนครปฐม<br>85 ถนนมาลัยแมน อำเภอเมือง จังหวัดนครปฐม 73000</p>
                </div>
                <div class="footer-links">
                    <a href="{{ route('se.home') }}">หน้าแรก</a>
                    <a href="{{ route('se.about') }}">เกี่ยวกับเรา</a>
                    <a href="{{ route('se.courses') }}">หลักสูตร</a>
                    <a href="{{ route('se.faculty') }}">อาจารย์ประจำสาขา</a>
                    <a href="{{ route('se.news') }}">ข่าวสารและกิจกรรม</a>
                    <a href="{{ route('se.contact') }}">ติดต่อ</a>
                </div>
                <div class="copyright">
                    <p>&copy; {{ date('Y') }} ภาควิชาวิศวกรรมซอฟต์แวร์ มหาวิทยาลัยราชภัฏนครปฐม สงวนลิขสิทธิ์</p>
                </div>
            </div>
        </div>
    </footer>

    @yield('scripts')
</body>
</html>