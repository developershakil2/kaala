import React, { useState } from 'react';
import {Link} from 'react-router-dom';
import MenuIcon from '@mui/icons-material/Menu';
import CancelIcon from '@mui/icons-material/Cancel';
const Nav = () =>{
const close = "none";
const open = "flex";

const [openMenau , setOpenMenu] = useState(close);
const op =()=>{
    setOpenMenu(open);
  
   
}
const cl = ()=>{
    setOpenMenu(close);
}
    return(
        <>
            <nav id='nav1'z>
               <div className="container m-auto  row">
                   <div className="col-6 logo">
                       <img  src="images/firstPage/logo2.png" alt="logo"/>
                   </div>
                   <div className="col-6 nav_right">
                          <button style={{color:'#fff', }} onClick={op} id="open"><MenuIcon style={{fontSize:'36px'}}/></button>
                         <ul style={{display:openMenau,}} id="main_menu">
                         <button style={{color:'#fff', }} onClick={cl} id="close"><CancelIcon style={{fontSize:'36px'}}/></button>
 
                             <li><a href="#third">What dow we do </a></li>
                              <li><a href="#four">Concepts</a></li>
                              <ul id="the_menu">
<li id="home_li1" className="home_li"><Link to="team/team2">Team</Link></li>
<li id="home_li2" className="home_li"><Link to="team">Product</Link></li>
<li id="home_li3" className="home_li"><Link target='_blank' to="/">Vision</Link></li>
<li id="home_li4" className="home_li"><Link to="team/contact">Contact</Link></li>
</ul>
                         </ul>
                        
                   </div>
               </div>

            </nav>
        </>
    )
}

export default Nav;