import React from 'react';

const HeaderWrapper =() =>  {
    
        return (
            <div className="headerwrapper">
	    <div id="header" className="container">
		<div className="logo"> <a href="#"><img src="images/LOGO.png" alt="logo" width="165" height="74"/></a></div> 
        <nav>
            <ul id="navigations">
                <li><a href="#navigations">HOME</a></li>
                <li> <a href="#slider">ABOUT</a></li>
                <li><a href="#map">LOCATONS</a></li>
                <li><a href="#bestdishes">MENU</a></li>
                <li><a href="#contactus">CONTACT</a></li>
            </ul>
        </nav>
      </div> 
    </div>
        );
    }

export default HeaderWrapper;
