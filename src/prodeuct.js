import React from 'react';
import ThirdSec from './team/Section3';
import Nav from './team/Navigation';
import Home from './team/Hom2';
import SecondSec from './team/Section2';
import Four from './team/Section4';
import Five from './team/Section5';
import Footer from './team/Footer';
 
const HomeSection = ()=>{
    return(
        <>
        <Nav/>
        <Home/>
        <SecondSec/>
        <ThirdSec/>
        <Four/>
        <Five/>
        <Footer/> 
        </>
    )
}

export default HomeSection;