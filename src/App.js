import React from "react";
import Home from './components/Home';
import {Routes , Route} from 'react-router-dom';
import HomeSection from './prodeuct.js';
import Ind from './Team';
import Contact from './team/contact/Contact';
import Contact2 from './team/team2/contact/Contact';
function App() {
  return (
   <>
   <Routes>
   
     <Route path="/" element={<Home/>}/>
     <Route path="team" element={<HomeSection/>}/>
     <Route path="team/team2" element={<Ind/>}/>
     <Route path="team/contact" element={<Contact/>}/>
     <Route path="team/team2/contact" element={<Contact2/>}/>
   </Routes>

    
   </>
   
  );
}

export default App;
