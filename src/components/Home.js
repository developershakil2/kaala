import React from 'react';
import {Link} from 'react-router-dom';
import Nav from './Nav';
import SecondSec from './SecondSec';
import ThirdSec from './ThirdSec';
import Four from './FourSec';
import Five from './FiveSec';
import Footer from './Footer';
 

const Home = () =>{
    return(
        <>
         <Nav/>
         <section id="bg">
             <div className="container m-auto row ">
                  <div style={{display:'grid', placeItems:'center',height: "90vh"}} id="home_right" className="col-12 col-md-6 col-lg-6 col-xl-6 ">

                    <p style={{color:'purple'}}>The Great Shift "Serving Curiosity" For a Sustainable and Conscious Planet</p>


                      {/* <p>We Empower <a href="#">Conscious</a> Thinking</p> */}
                  </div>
                    <div id="home_links" className="col-12 col-md-6 col-lg-6 col-xl-6">
                         {/* <ul id="the_home_menu">
                             <li id="home_li_1" className="home_li"><Link to="team/team2">Team</Link></li>
                             <li id="home_li_2" className="home_li"><Link to="team">Product</Link></li>
                             <li id="home_li_3" className="home_li"><a target='_blank' href="#">Vision</a></li>
                             <li id="home_li_4" className="home_li"><Link target="_blank" to="team/contact">Contact</Link></li>
                         </ul> */}
                    </div>
             </div>
         </section>
         <SecondSec/>
         <ThirdSec/>
         <Four/>
         <Five/>
         <Footer/>
        </>
    )
}

export default Home;
