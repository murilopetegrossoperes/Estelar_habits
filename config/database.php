<?php
class Database {
    private $host;
    private $db_name;
    private $username;
    private $password;
    public $conn;

    // O construtor é executado automaticamente quando a classe é instanciada
    public function __construct() {
        // Define o caminho para o arquivo .env (voltando uma pasta a partir de config/)
        $envPath = __DIR__ . '/../.env';
        
        // Lê o arquivo linha por linha e cria as variáveis de ambiente
        if (file_exists($envPath)) {
            $lines = file($envPath, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
            foreach ($lines as $line) {
                // Ignora comentários no arquivo .env
                if (strpos(trim($line), '#') === 0) continue; 
                
                list($name, $value) = explode('=', $line, 2);
                $_ENV[trim($name)] = trim($value);
            }
        }

        // Atribui os valores pegando do $_ENV. Se não achar, usa um fallback vazio.
        $this->host = $_ENV['DB_HOST'] ?? '127.0.0.1';
        $this->db_name = $_ENV['DB_NAME'] ?? 'habit_tracker';
        $this->username = $_ENV['DB_USER'] ?? 'root';
        $this->password = $_ENV['DB_PASS'] ?? '';
    }

    // Seu método original intacto
    public function getConnection() {
        $this->conn = null;

        try {
            // Criação da instância PDO usando as variáveis carregadas
            $this->conn = new PDO("mysql:host=" . $this->host . ";dbname=" . $this->db_name . ";charset=utf8mb4", $this->username, $this->password);
            
            // Define o modo de erro
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        } catch(PDOException $exception) {
            echo "Erro na conexão: " . $exception->getMessage();
        }

        return $this->conn;
    }
}
?>
