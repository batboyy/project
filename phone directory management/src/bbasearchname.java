import javax.swing.*;
import javax.swing.table.DefaultTableModel;

import java.awt.*;
import java.sql.*;
import java.awt.event.*;

public class bbasearchname implements ActionListener{
JFrame frame, frame1;
JTextField t1,t2,t3;
JLabel l1,l2,l3;
JButton button;
JPanel panel;
static JTable table;

String driverName = "com.mysql.jdbc.Driver";


String[] columnNames = {"firstname", "lastname", "address", "phone_no1"};

public bbasearchname  ()
{
frame = new JFrame("Database Search Result");
frame.setDefaultCloseOperation(JFrame.EXIT_ON_CLOSE);
frame.setLayout(null);
t1 = new JTextField();
t2 = new JTextField();
t3 = new JTextField();
t1.setBounds(150,30,150,20); 
t2.setBounds(150,70,150,20); 
t3.setBounds(150,100,150,20); 
l1 = new JLabel("Enter your Batch:");
l2 = new JLabel("Enter your firstname:");
l3 = new JLabel("Enter your lastname:");
l1.setBounds(30, 30, 100, 20);
l2.setBounds(30, 70, 100, 20);
l3.setBounds(30, 100, 100, 20);
button = new JButton("search");
button.setBounds(120,120,150,20);
button.setBounds(120,150,150,20);
button.addActionListener(this);

frame.add(t1);
frame.add(l1);
frame.add(t2);
frame.add(l2);
frame.add(t3);
frame.add(l3);
frame.add(button);
frame.setVisible(true);
frame.setSize(500, 300); 
t2.addKeyListener(new KeyAdapter(){
    public void keyPressed(KeyEvent e){

        char ch = e.getKeyChar();
        if(!Character.isDigit(ch)){
        }
        else{
            JOptionPane.showMessageDialog(null, "Only characters  are allowed!");
            t2.setText(" ");
        }
    }
});

t3.addKeyListener(new KeyAdapter(){
    public void keyPressed(KeyEvent e){

        char ch = e.getKeyChar();
        if(!Character.isDigit(ch)){
        }
        else{
            JOptionPane.showMessageDialog(null, "Only characters  are allowed!");
            t3.setText(" ");
        }
    }
});
} 

public void actionPerformed(ActionEvent ae)
{
button = (JButton)ae.getSource();
System.out.println("Showing Table Data.......");
showTableData(); 
} 

public void showTableData()
{

frame1 = new JFrame("Database Search Result");
frame1.setDefaultCloseOperation(JFrame.EXIT_ON_CLOSE);
frame1.setLayout(new BorderLayout()); 
//TableModel tm = new TableModel();
DefaultTableModel model = new DefaultTableModel();
model.setColumnIdentifiers(columnNames);
//DefaultTableModel model = new DefaultTableModel(tm.getData1(), tm.getColumnNames()); 
//table = new JTable(model);
table = new JTable();
table.setModel(model); 
table.setAutoResizeMode(JTable.AUTO_RESIZE_ALL_COLUMNS);
table.setFillsViewportHeight(true);
JScrollPane scroll = new JScrollPane(table);
scroll.setHorizontalScrollBarPolicy(
JScrollPane.HORIZONTAL_SCROLLBAR_AS_NEEDED);
scroll.setVerticalScrollBarPolicy(
JScrollPane.VERTICAL_SCROLLBAR_AS_NEEDED); 
String batch = t1.getText();
String firstname= t2.getText();
String secondname= t3.getText();
String fname= "";
String lname= "";
String add = "";
String p1 = "";

try
{ 
Class.forName(driverName); 
Connection con = DriverManager.getConnection( "jdbc:mysql://localhost:3306/bba","root","");
String sql = "select * from "+batch+" where fname='"+firstname+"' and lname='"+secondname+"' ";
PreparedStatement ps = con.prepareStatement(sql);
ResultSet rs = ps.executeQuery();
int i =0;
while(rs.next())
{
fname = rs.getString(1);
lname = rs.getString(2);
add = rs.getString(3);
p1 = rs.getString(4);  
model.addRow(new Object[]{fname, lname, add, p1});
i++; 
}
if(i <1)
{
JOptionPane.showMessageDialog(null, "No Record Found","Error",
JOptionPane.ERROR_MESSAGE);
}
if(i ==1)
{
System.out.println(i+" Record Found");
}
else
{
System.out.println(i+" Records Found");
}
}
catch(Exception e)
{
JOptionPane.showMessageDialog(null, e.getMessage(),"Error",
JOptionPane.ERROR_MESSAGE);
}
frame1.add(scroll);
frame1.setVisible(true);
frame1.setSize(500,400);
}

public static void main(String args[])
{
 new bbasearchname ();

}
}