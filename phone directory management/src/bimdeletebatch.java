


import javax.swing.*;

import java.awt.*;

import java.awt.event.*;

import java.sql.*; 

public class bimdeletebatch extends JFrame implements ActionListener
  { 

    JLabel l1, l2,l3;

    JTextField  tf1;

    JButton btn1, btn2; 



    bimdeletebatch()
     {

        setVisible(true);

        setSize(550, 300);

        setLayout(null);

        setDefaultCloseOperation(JFrame.HIDE_ON_CLOSE);

        setTitle("phone directory ");

 

        l1 = new JLabel("Delete batch");

        l1.setForeground(Color.blue);

        l1.setFont(new Font("Serif", Font.BOLD, 20));
        l1.setFont(new Font("Serif",Font.ITALIC, 20));

 

        
        l2 = new JLabel("Enter the Batch:");
         tf1 = new JTextField();

               

 

        btn1 = new JButton("delete");

        btn2 = new JButton("Clear");

        l1.setBounds(100, 30, 400, 30);

        

        l2.setBounds(80, 110, 200, 30);

        

        

        tf1.setBounds(300, 110, 200, 30);
       
        

        btn1.setBounds(50, 200, 100, 30);

        btn2.setBounds(170, 200, 100, 30);

       add(l1);   add(l2); add(tf1); 

        

        add(btn1);

        add(btn2);

    
  btn1.addActionListener(new ActionListener()
    {
    public void actionPerformed(ActionEvent e)
     {
             
        if (e.getSource() == btn1)
         {

        	try{  
        		
        		
                String batch=tf1.getText();
                Class.forName("com.mysql.jdbc.Driver");  
    			Connection con=DriverManager.getConnection( "jdbc:mysql://localhost:3306/bim","root","");    
    			Statement stmt=con.createStatement();  
    			                 
              
                	 String sql=" drop table "+batch+"";
                	  tf1.setText("");
                      
         			stmt.executeUpdate(sql);
         			JOptionPane.showMessageDialog(null,"batch deleted Successfully!");
         			con.close();  	 
                 
        	}
        		
            	
    			
        	
        	catch(Exception ee)
        	{ 
        		
        	} 
        	
        	
    	} 

        
       
    		}
    
    });
    
  btn2.addActionListener(new ActionListener()
		  {
  public void actionPerformed(ActionEvent ae)
  {

     if (ae.getSource() == btn2)
      {

         
          tf1.setText("");

         
     }

 } 
		  });
        }

    

    public static void main(String args[])
   {

        new bimdeletebatch();

    }



	@Override
	public void actionPerformed(ActionEvent arg0) {
		// TODO Auto-generated method stub
		
	}
}


