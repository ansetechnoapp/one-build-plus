import React, { useState, useEffect } from "react";
import "../css/Navbar.css";
import logo from '../../public/assets/react.svg';

const Navbar: React.FC = () => {
  const [isMobileMenuOpen, setIsMobileMenuOpen] = useState(false);
  const [isScrolled, setIsScrolled] = useState(false);

  const toggleMobileMenu = () => {
    setIsMobileMenuOpen(!isMobileMenuOpen);
  };

  useEffect(() => {
    const handleScroll = () => {
      const scrollTop = window.pageYOffset;
      setIsScrolled(scrollTop > 0);
    };

    window.addEventListener('scroll', handleScroll);

    return () => {
      window.removeEventListener('scroll', handleScroll);
    };
  }, []);

  return (
    <nav className={`navbar ${isScrolled ? 'scrolled' : ''}`}>
      <div className="logo">
       <img src={logo} alt="" />
      </div>
      <ul className={`menu ${isMobileMenuOpen ? 'mobile-menu-open' : ''}`}>
        <li>Accueil</li>
        <li>Services</li>
        <li>Contact</li>
      </ul>
      <button className="login-button">Connexion</button>
      <div className="mobile-menu-icon" onClick={toggleMobileMenu}>
        <div className="bar"></div>
        <div className="bar"></div>
        <div className="bar"></div>
      </div>
      {isMobileMenuOpen && (
        <div className="sidebar">
          <ul>
            <li>Accueil</li>
            <li>Services</li>
            <li>Contact</li>
          </ul>
        </div>
      )}
    </nav>
  );
};


export default Navbar;
