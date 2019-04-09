import javax.swing.*;

import java.awt.*;

import java.awt.event.*;

import java.sql.*; 

public class bbainsert extends JFrame implements ActionListener
  { 

    JLabel l1, l2, l3,l4,l5,l6;

    JTextField tf1, tf2, tf3,tf4,tf5;

    JButton btn1, btn2;



    bbainsert()
     {

        setVisible(true);

        setSize(650, 500);

        setLayout(null);
        setTitle("BBA Entry form");

        setDefaultCloseOperation(JFrame.HIDE_ON_CLOSE);

        setTitle("Data Entry Form ");

 

        l1 = new JLabel("Data Entry Form:");

        l1.setForeground(Color.blue);

        l1.setFont(new Font("Serif", Font.BOLD, 20));
        l1.setFont(new Font("Serif",Font.ITALIC, 20));

 

        l2 = new JLabel("Batch:" );
       
        l3 = new JLabel( "fName:" ); 
        
        l4 = new JLabel("lName:");

        l5 = new JLabel("Address:");


        l6 = new JLabel("Phone No1:");  
        
          

       
        
        tf1 = new JTextField();

        tf2 = new JTextField();

               tf3 = new JTextField();
               tf4 = new JTextField();
               tf5 = new JTextField();

              

        btn1 = new JButton("Submit");

        btn2 = new JButton("Clear");

        l1.setBounds(100, 30, 400, 30);

        l2.setBounds(80, 70, 200, 30);

        l3.setBounds(80, 110, 200, 30);

        l4.setBounds(80, 150, 200, 30);
        
        l5.setBounds(80, 190, 200, 30);
        
        l6.setBounds(80, 230, 200, 30);
      

        tf1.setBounds(300, 70, 200, 30);

        tf2.setBounds(300, 110, 200, 30);
       
        tf3.setBounds(300, 150, 200, 30);
        
        tf4.setBounds(300, 190, 200, 30);
        
        tf5.setBounds(300, 230, 200, 30);
       
        btn1.setBounds(50, 350, 100, 30);

        btn2.setBounds(170, 350, 100, 30);

       add(l1);  add(l2); add(tf1); add(l3); add(tf2);
       
            
       
     
      

        add(tf3);
        add(l4); 
        
        add(l5); 

        add(tf4); 
        
        add(l6); add(tf5);
        
       

        add(btn1);

        add(btn2);

               
        tf2.addKeyListener(new KeyAdapter(){
            public void keyPressed(KeyEvent ee){

                char ch1 = ee.getKeyChar();
                if(!Character.isDigit(ch1)){
                }
                else{
                    JOptionPane.showMessageDialog(null, "Only characters  are allowed!");
                    tf2.setText(" ");
                }
            }
        });

        tf3.addKeyListener(new KeyAdapter(){
            public void keyPressed(KeyEvent ee){

                char ch1 = ee.getKeyChar();
                if(!Character.isDigit(ch1)){
                }
                else{
                    JOptionPane.showMessageDialog(null, "Only characters  are allowed!");
                    tf3.setText(" ");
                }
            }
        });

        
        
        tf4.addKeyListener(new KeyAdapter(){
            public void keyPressed(KeyEvent e){

                char ch = e.getKeyChar();
                if(!Character.isDigit(ch)){
                }
                else{
                    JOptionPane.showMessageDialog(null, "Only characters  are allowed!");
                    tf4.setText(" ");
                }
            }
        });
        
        tf5.addKeyListener(new KeyAdapter(){
            public void keyPressed(KeyEvent e){

                char ch = e.getKeyChar();
                if(Character.isDigit(ch)){
                }
                else{
                    JOptionPane.showMessageDialog(null, "Only numbers  are allowed!");
                    tf5.setText(" ");
                }
            }
        });
        
        
    
  btn1.addActionListener(new ActionListener()
    {
    public void actionPerformed(ActionEvent e)
     {
             
        if (e.getSource() == btn1)
         {

        	try{  
    			Class.forName("com.mysql.jdbc.Driver");  
    			Connection con=DriverManager.getConnection( "jdbc:mysql://localhost:3306/bba","root","");    
    			Statement stmt=con.createStatement();  
    			String batch= tf1.getText(); 
    			String fname=tf2.getText();
    			String lname=tf3.getText();
                 String address=tf4.getText();
                 String phone1= tf5.getText();
                 
                 
                /* if(fname.matches("[a-zA-Z]+")&&(lname.matches("[a-zA-Z]+"))&&(address.matches("[a-zA-Z]+"))&&(!phone1.matches("[a-zA-Z]+")))*/
                 if(fname.isEmpty()||lname.isEmpty()|| address.isEmpty() || phone1.isEmpty())
                 {
                	 JOptionPane.showMessageDialog(null,"field empty");  
                	
                	 if(!phone1.isEmpty()&&phone1.length ()<10)
                     {
                    	 
                    	 JOptionPane.showMessageDialog(null,"numbers not enough");                  
                     }

                 
                 }
                 else
                	 

                 {
                	 String sql="insert into "+batch+" values('"+fname+"','"+lname+"','"+address+"','"+phone1+"')";
                	 tf1.setText("");
                	 tf2.setText("");
                	 tf3.setText("");
                	 tf4.setText("");
                	 tf5.setText("");
                
         			stmt.executeUpdate(sql);
         			JOptionPane.showMessageDialog(null,"Inserted Successfully!");
         			con.close();  	 
                 }
                 
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
    	 tf2.setText("");
    	 tf3.setText("");
    	 tf4.setText("");
    	 tf5.setText("");
    	 


     }

 } 
		  });
        }

    

    public static void main(String args[])
   {

        new biminsert();

    }



	@Override
	public void actionPerformed(ActionEvent arg0) {
		// TODO Auto-generated method stub
		
	}
}
