import React from 'react';
import {Link} from 'react-router-dom';
import './style.css';


const Home = () =>{
    return(
        <>
          
    
          <section id="bg2">
             <div className="container m-auto row ">
                  <div id="home_right" className="col-12 col-md-6 col-lg-6 col-xl-6 ">
                      <h3>We Empower<span style={{color:'#42FFFF'}}>  Product</span> {'&'}Thinking</h3>
                       <p>We Empower <a href="#">Product</a> Thinking</p>
                   </div>
                    <div id="home_links" className="col-12 col-md-6 col-lg-6 col-xl-6">
                         {/* <ul id="the_home_menu">
                             <li id="home_li_1" className="home_li"><Link to="team2">Team</Link></li>
                             <li id="home_li_p2p" className="home_li"><a href="#">Product</a></li>
                             <li id="home_li_2p2" className="home_li"><Link target='_blank' to="/">Vision</Link></li>
                             <li id="home_li_4" className="home_li"><Link target="_blank" to="contact">Contact</Link></li>
                         </ul> */}
                    </div>
             </div>
         </section>
        </>
    )
}

export default Home;
