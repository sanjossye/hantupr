 <style>
        @import url('https://fonts.googleapis.com/css2?family=Creepster&family=Nosifer&family=Griffy:wght@400&display=swap');
        
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Griffy', cursive;
            background: linear-gradient(45deg, #0a0a0a 0%, #1a0e1a 25%, #2d1b1b 50%, #1a0e1a 75%, #0a0a0a 100%);
            background-size: 400% 400%;
            animation: ghostlyBackground 8s ease-in-out infinite;
            color: #fff;
            min-height: 100vh;
            overflow-x: auto;
            position: relative;
        }

        /* Floating particles effect */
        body::before {
            content: '';
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-image: 
                radial-gradient(2px 2px at 20px 30px, rgba(255, 255, 255, 0.3), transparent),
                radial-gradient(2px 2px at 40px 70px, rgba(255, 68, 68, 0.4), transparent),
                radial-gradient(1px 1px at 90px 40px, rgba(255, 255, 255, 0.2), transparent),
                radial-gradient(1px 1px at 130px 80px, rgba(255, 68, 68, 0.3), transparent);
            background-size: 200px 100px;
            animation: float 6s ease-in-out infinite;
            pointer-events: none;
            z-index: 1;
        }

        @keyframes ghostlyBackground {
            0%, 100% { background-position: 0% 50%; }
            50% { background-position: 100% 50%; }
        }

        @keyframes float {
            0%, 100% { transform: translateY(0px); }
            50% { transform: translateY(-10px); }
        }

        .container {
            position: relative;
            z-index: 2;
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
        }

        h1 {
            font-family: 'Nosifer', cursive;
            font-size: 3.5em;
            text-align: center;
            margin: 30px 0 50px 0;
            text-shadow: 
                0 0 10px #ff4444,
                0 0 20px #ff4444,
                0 0 30px #ff4444,
                0 0 40px #ff0000,
                0 0 50px #ff0000;
            animation: flicker 3s ease-in-out infinite alternate;
            background: linear-gradient(45deg, #ff4444, #ff6666, #ff4444);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }

        @keyframes flicker {
            0%, 100% { opacity: 1; text-shadow: 0 0 10px #ff4444, 0 0 20px #ff4444, 0 0 30px #ff4444; }
            50% { opacity: 0.8; text-shadow: 0 0 5px #ff4444, 0 0 10px #ff4444, 0 0 15px #ff4444; }
        }

        .table-container {
            background: rgba(20, 20, 20, 0.9);
            border-radius: 20px;
            padding: 30px;
            box-shadow: 
                0 20px 40px rgba(255, 68, 68, 0.3),
                inset 0 1px 0 rgba(255, 255, 255, 0.1),
                0 0 60px rgba(0, 0, 0, 0.8);
            backdrop-filter: blur(10px);
            border: 2px solid rgba(255, 68, 68, 0.3);
            position: relative;
            overflow: hidden;
        }

        .table-container::before {
            content: '';
            position: absolute;
            top: -2px;
            left: -2px;
            right: -2px;
            bottom: -2px;
            background: linear-gradient(45deg, #ff4444, #ff0000, #cc0000, #ff4444);
            border-radius: 20px;
            z-index: -1;
            animation: borderGlow 3s linear infinite;
        }

        @keyframes borderGlow {
            0% { background-position: 0% 50%; }
            50% { background-position: 100% 50%; }
            100% { background-position: 0% 50%; }
        }

        table {
            width: 100%;
            border-collapse: collapse;
            background: transparent;
            font-size: 1.1em;
        }

        th {
            background: linear-gradient(135deg, #ff4444, #cc0000);
            color: white;
            padding: 20px 15px;
            text-transform: uppercase;
            font-weight: bold;
            letter-spacing: 1px;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.7);
            border-bottom: 3px solid #ff0000;
            position: relative;
            font-family: 'Griffy', cursive;
        }

        th::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 100%;
            height: 3px;
            background: linear-gradient(90deg, transparent, #fff, transparent);
            animation: shimmer 2s ease-in-out infinite;
        }

        @keyframes shimmer {
            0% { transform: translateX(-100%); }
            100% { transform: translateX(100%); }
        }

        td {
            padding: 18px 15px;
            border-bottom: 1px solid rgba(255, 68, 68, 0.2);
            transition: all 0.3s ease;
            position: relative;
            background: rgba(25, 25, 25, 0.5);
        }

        tr:hover td {
            background: rgba(255, 68, 68, 0.1);
            transform: scale(1.02);
            box-shadow: 
                0 5px 15px rgba(255, 68, 68, 0.3),
                inset 0 1px 0 rgba(255, 255, 255, 0.1);
        }

        tr:hover td:first-child {
            color: #ff4444;
            font-weight: bold;
            text-shadow: 0 0 10px #ff4444;
        }

        /* ID column styling */
        td:first-child {
            font-weight: bold;
            color: #ff6666;
            text-align: center;
            font-size: 1.2em;
        }

        /* Name column styling */
        td:nth-child(2) {
            font-weight: bold;
            color: #ffaaaa;
            font-size: 1.1em;
        }

        /* Origin column styling */
        td:nth-child(3) {
            color: #cccccc;
            font-style: italic;
        }

        /* Type column styling */
        td:nth-child(4) {
            color: #ff8888;
            font-weight: 500;
        }

        /* Story column styling */
        td:nth-child(5) {
            color: #e0e0e0;
            max-width: 300px;
            line-height: 1.4;
        }

        /* Responsive design */
        @media (max-width: 768px) {
            h1 {
                font-size: 2.5em;
                margin: 20px 0 30px 0;
            }
            
            .container {
                padding: 10px;
            }
            
            .table-container {
                padding: 15px;
                margin: 0 5px;
            }
            
            table {
                font-size: 0.9em;
            }
            
            th, td {
                padding: 12px 8px;
            }
            
            td:nth-child(5) {
                max-width: 200px;
                font-size: 0.85em;
            }
        }

        @media (max-width: 480px) {
            h1 {
                font-size: 2em;
            }
            
            table {
                font-size: 0.8em;
            }
            
            th, td {
                padding: 10px 5px;
            }
        }

        /* Scroll effects */
        .table-container {
            max-height: 80vh;
            overflow-y: auto;
        }

        .table-container::-webkit-scrollbar {
            width: 12px;
        }

        .table-container::-webkit-scrollbar-track {
            background: rgba(20, 20, 20, 0.5);
            border-radius: 10px;
        }

        .table-container::-webkit-scrollbar-thumb {
            background: linear-gradient(135deg, #ff4444, #cc0000);
            border-radius: 10px;
            border: 2px solid rgba(20, 20, 20, 0.5);
        }

        .table-container::-webkit-scrollbar-thumb:hover {
            background: linear-gradient(135deg, #ff6666, #ff4444);
        }

        /* Loading animation for table */
        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        tr {
            animation: fadeInUp 0.6s ease forwards;
        }

        tr:nth-child(even) {
            animation-delay: 0.1s;
        }

        tr:nth-child(odd) {
            animation-delay: 0.2s;
        }

        /* Ghost emoji animation in header */
        h1 .ghost {
            display: inline-block;
            animation: ghostFloat 2s ease-in-out infinite;
        }

        @keyframes ghostFloat {
            0%, 100% { transform: translateY(0px) rotate(0deg); }
            50% { transform: translateY(-10px) rotate(5deg); }
        }

        /* Footer with spooky text */
        .footer {
            text-align: center;
            margin-top: 40px;
            padding: 20px;
            color: rgba(255, 255, 255, 0.6);
            font-style: italic;
        }
    </style>
    
