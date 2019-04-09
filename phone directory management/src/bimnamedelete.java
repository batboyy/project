

import javax.swing.*;

import java.awt.*;

import java.awt.event.*;

import java.sql.*;

 

public class bimnamedelete extends JFrame implements ActionListener
  { 

    JLabel l1,l2,l3,l4;

    JTextField tf1,tf2,tf3;

    JButton btn1;



    bimnamedelete()
     {

        setVisible(true);

        setSize(550, 350);

        setLayout(null);

        setDefaultCloseOperation(JFrame.HIDE_ON_CLOSE);

        setTitle("bimdelete Record ");

 

        l1 = new JLabel("Data bimdelete:");

        l1.setForeground(Color.blue);

        l1.setFont(new Font("Serif", Font.BOLD, 20));
        l1.setFont(new Font("Serif",Font.ITALIC, 20));

 

        l2 = new JLabel("Batch:");
        l3 =new JLabel("First Name:");
        l4 = new JLabel("Last name");
        

        tf1 = new JTextField();

        tf2 = new JTextField();

        tf3 = new JTextField();
 

        btn1 = new JButton("delete");

        
        l1.setBounds(100, 30, 400, 30);
        l2.setBounds(80, 70, 200, 30);
        l3.setBounds(50, 125, 100, 30);
        l4.setBounds(50, 170, 100, 30);
        

        

        

        tf1.setBounds(300, 70, 200, 30);

        tf2.setBounds(300, 125, 200, 30);

        tf3.setBounds(300, 170, 200, 30);

        btn1.setBounds(50, 250, 100, 30);

        

 

        add(l1);
        add(l2);
        add(tf1);
        add(l3);
        add(tf2);
        add(l4);
        add(tf3);

        

        add(btn1);
        
        
        
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

    btn1.addActionListener(new ActionListener()
    		{

    public void actionPerformed(ActionEvent e)
     {
            
     try{
        	Class.forName("com.mysql.jdbc.Driver");  
        	
			Connection con=DriverManager.getConnection( "jdbc:mysql://localhost:3306/bim","root","");   
        	  Statement st = con.createStatement();
             String batch=tf1.getText();
        	  String fName=tf2.getText();
             String lName=tf3.getText();
             tf1.setText("");
             
             tf2.setText("");

             tf3.setText("");


                
             
               String sql= "delete from "+batch+" where fname ='"+fName+"' and lname ='"+lName+"' ";
               st.executeUpdate(sql);
               
               JOptionPane.showMessageDialog(null,"record deleted Successfully!");
             
          con.close();
        	}
        	
        	catch(Exception E)
        	{
        		
        	}

    
     }
    		});
     }

    public static void main(String args[])
   {

        new bimnamedelete();

    }

	@Override
	public void actionPerformed(ActionEvent e) {
		// TODO Auto-generated method stub
		
	}
  }

	
