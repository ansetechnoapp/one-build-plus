import React from 'react'
import ReactDOM from 'react-dom/client'
import App from './App.tsx'
import '../js/bootstrap.js'
import '../../src/index.css'
import Appother from "./Appother.tsx";
import Navbar from "./Navbar.tsx";

ReactDOM.createRoot(document.getElementById('root') as HTMLElement).render(
  <React.StrictMode>
    <Navbar />
    <Appother />
  </React.StrictMode>,
)
