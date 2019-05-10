
package controller;

import javafx.scene.control.TextField;
import dao.ClienteDAO;
import java.net.URL;
import java.util.ResourceBundle;
import javafx.fxml.FXML;
import javafx.fxml.Initializable;
import model.Cliente;

/**
 * FXML Controller class
 *
 * @author localhost
 */
public class FXMLCadastrorController implements Initializable {

     @FXML
    private TextField txtNome;

    @FXML
    private TextField txtEmail;

    @FXML
    private TextField txtSenha;

    @FXML
    void salvar() {
        Cliente c = new Cliente();
        ClienteDAO dao = new ClienteDAO();
        c.setNome(txtNome.getText());
        c.setEmail(txtEmail.getText());
        c.setSenha(txtSenha.getText());
        dao.salvar(c);
    }    

    @Override
    public void initialize(URL url, ResourceBundle rb) {
        // TODO
    }    
    
}
