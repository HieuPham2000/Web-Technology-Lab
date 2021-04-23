<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>My E-Commerce Website</title>
        <style>
            html, body, div, span, applet, object, iframe,
            h2, h2, h3, h4, h5, h6, p, blockquote, pre,
            a, abbr, acronym, address, big, cite, code,
            del, dfn, em, font, img, ins, kbd, q, s, samp,
            small, strike, strong, sub, sup, tt, var,
            dl, dt, dd, ol, ul, li,
            fieldset, form, label, legend,
            table, caption, tbody, tfoot, thead, tr, th, td {
                margin: 0;
                padding: 0;
                border: 0;
                outline: 0;
                font-weight: inherit;
                font-style: inherit;
                font-size: 100%;
                font-family: inherit;
                vertical-align: baseline;
            }
            /* remember to define focus styles! */
            :focus {
                outline: 0;
            }
            
                   
            body {
                line-height: 1;
                color: black;
                background: white;

                padding: 20px 40px 40px 40px; 
                width: 50%;
                margin: auto;

            }
            ol, ul {
                list-style: none;
            }

            table {
                border-collapse: separate;
                border-spacing: 0;
            }
            caption, th, td {
                text-align: left;
                font-weight: normal;
            }
            blockquote:before, blockquote:after,
            q:before, q:after {
                content: "";
            }
            blockquote, q {
                quotes: "" "";
            }
            html { overflow: -moz-scrollbars-vertical; }
            html { overflow-x: auto; }



            h1 {
                color:#ff5050;
                font-family: Cambria, serif;
                font-size: 34px;
                font-style: normal;
                font-weight: bold;
                text-transform: uppercase;
                letter-spacing: 1px;
                line-height: 1.7em;
                padding:0;
                margin:0;
                padding:10px;

                text-align: center;
            }

            h2 {
                color:#000000;
                font-family: Cambria, serif;
                font-size: 14px;
                font-style: normal;
                font-weight: bold;
                text-transform: uppercase;
                letter-spacing: 1px;
                line-height: 1.7em;
                padding:0;
                margin:0;
                padding:10px;
            }
            
            .name {
                color:#ff5050;
                text-align: center;
                text-decoration: underline;
                font-size: 20px;
            }

            .category {
                font-family: Georgia, "Times New Roman", Times, serif;
                margin:10px;
                margin-left:0px;
                margin-bottom:20px;
            }
            
            .price {
                display: inline-block;
                padding:3px 8px;
                background-color: #ff6600;
                color: #ffffff;
                border-radius: 3px;
            }

            .tag {
                display:inline-block;
                
                font-family: Georgia, "Times New Roman", Times, serif;
                font-weight: normal;
                font-size: 14px;
                text-transform: lowercase;

                padding: 2px 8px;
                margin: 0px 5px;
                
                background-color: #0099ff;
                color: #ffffff;
                border-radius: 5px;
            }

            .category a {
                font-size:14px;
                padding:10px;
                color:#333333;
                text-decoration:none;
                transition: 0.2s ease-out;
            }

            .category a:hover{ 
                background-color:#ff9999;
            }

            .container-page-number {
                display: flex;
                flex-direction: row;
                align-items: center;
                justify-content: center;
                color: #ffffff;
                
                position: absolute;
                top: 50%;
                left: 50%;
                right: 50%;
            }
            .current-page-number {
                background-color: #ff5050;
                color: inherit;
                
                width: 20px;
                padding: 10px;
                
                border-radius: 50%;
                text-align: center;
                
                margin: 10px;
            }

            .link-page-number > a {
                display: block;
                text-decoration: none;
                
                background-color: #ff9999;
                color: inherit;
                
                width: 10px;
                padding: 5px 8px;
                margin: 10px;
                
                border-radius: 50%;
                text-align: center;
                
                transition: 0.2s ease-out;
            }

            .link-page-number > a:hover {
                background-color: #ff6666;
                transform: scale(1.2);
            }
            
            .inform {
                text-align: center;
            }
            .inform > a {
                color: #ff5050;
                text-decoration: none;
                font-size: 18px;
                transition: 0.2s ease-out;
            }
            
            .inform > a:hover {
                font-weight: bold;
            }
        </style>
    </head>

    <body>
        <div class="navigation"><h1>My E-Commerce Website</h1>