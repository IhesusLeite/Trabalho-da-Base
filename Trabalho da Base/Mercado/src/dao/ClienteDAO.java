package dao;

import java.sql.Connection;
import java.sql.PreparedStatement;
import java.sql.SQLException;
import javax.swing.JOptionPane;
import model.Cliente;

/**
 *
 * @author localhost
 */
public class ClienteDAO {
    public void salvar(Cliente c){
          Connection con = ConexaoMercado.getConnection();
          PreparedStatement stmt = null;
          
        try {
            stmt = con.prepareStatement("INSERT INTO cliente (nome, email, senha) VALUES (?,?,?)");
            stmt.setString(1, c.getNome());
            stmt.setString(2, c.getEmail());
            stmt.setString(3, c.getSenha());
            
            stmt.executeUpdate();
           JOptionPane.showMessageDialog(null,"Salvo com Sucesso!!");
        } catch (SQLException ex) {
            JOptionPane.showMessageDialog(null,"Erro ao salva!!"+ex);
        }finally{
            ConexaoMercado.fechaConexao(con, stmt);
        }
        
    } 
}
