


import javax.swing.*;

import java.awt.*;

import java.awt.event.*;

import java.sql.*; 

public class bimcreatebatch extends JFrame implements ActionListener
  { 

    JLabel l,l1,l2,l3;

    JTextField tf1;

    JButton btn1, btn2; 



    bimcreatebatch()
     {

        setVisible(true);

        setSize(550, 300);

        setLayout(null);

        setDefaultCloseOperation(JFrame.HIDE_ON_CLOSE);

        setTitle("phone directory ");

 
        l = new JLabel("(Eg.kcmit2010)");
        l.setFont(new Font("Serif", Font.BOLD, 15));
        l.setForeground(Color.red);
        
        l1 = new JLabel("Create new bim batch");

        l1.setForeground(Color.blue);

        l1.setFont(new Font("Serif", Font.BOLD, 20));
        l1.setFont(new Font("Serif",Font.ITALIC, 20));

 

        

        l2 = new JLabel("Create the Batch ");


        

       

        tf1 = new JTextField();

               

 

        btn1 = new JButton("Create");

        btn2 = new JButton("Clear");

       
        l.setBounds(180, 110, 400, 30);
      
        l1.setBounds(100, 30, 400, 30);

      

        l2.setBounds(80, 110, 200, 30);

        

       

        tf1.setBounds(300, 110, 200, 30);
       
        

        btn1.setBounds(50, 200, 100, 30);

        btn2.setBounds(170, 200, 100, 30);

     add(l);  add(l1);  add(l2); add(tf1); 

        

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
    			                 
              
                	
    			String sql=" create table  "+batch+"(fName varchar(60),lName varchar(60),address varchar(60),Phone_no1 varchar(60) PRIMARY KEY)";
    			
    			tf1.setText("");
         			stmt.executeUpdate(sql);
         			JOptionPane.showMessageDialog(null,"batch created Successfully!");
         			con.close();
                
            
        	}
        		
            	
    			
        	
        	catch(Exception ee)
        	{ 
        		
        	} 
        	
        	
    	} 

        
       
    		}

	private boolean isInteger(int batch1) {
		// TODO Auto-generated method stub
		return false;
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

        new bimcreatebatch();

    }



	@Override
	public void actionPerformed(ActionEvent arg0) {
		// TODO Auto-generated method stub
		
	}
}
