
<?php
	include('HEAD.php');
?>

    <main>
        <section>

			<h1>Teste</h1>      

            <form>
				<DIV>
					<label 
						id='label1'>
						STATUS: Não Conectado
					</label>
				</DIV>
				
				<DIV>
					<label 
						id='label2'>
						Conexão Atual: MySQL
					</label>
				</DIV>				
                
                <button 
					id='cmd_config_mysql'
                    
					type="button" 
                    name="cmdconfig_mysql" 
                    onclick=""
				
					>Configurar mySQL
              
				</button>
				
                <button 
					id='cmd_ok_mysql'
                    
					type="button" 
                    name="cmdmysql" 
                    onclick=""
				
					>Conectar/Desconectar ao mySQL
              
				</button>				
				
				<DIV>
					<form>
						 Driver:	<input type="text" name="DRIVER"	value="">
						 SERVER:	<input type="text" name="SERVER"	value="">
						 UID:		<input type="text" name="UID"		value="">
						 PWD:		<input type="text" name="PWD"		value="">
						 DATABASE:	<input type="text" name="DATABASE"	value="">
					</form>
				</DIV>

                <button 
					id='cmd_config_sql'
                    
					type="button" 
                    name="cmd_config_sql" 
                    onclick=""
					
					>Configurar SQL SERVER
				
                </button>
				
                <button 
					id='cmd_ok_sql'
                    
					type="button" 
                    name="cmdmysql" 
                    onclick=""
				
					>Conectar/Desconectar ao SQL SERVER
              
				</button>				
				
				<DIV>
					<form>
						 Driver:	<input type="text" name="DRIVER"	value="">
						 SERVER:	<input type="text" name="SERVER"	value="">
						 UID:		<input type="text" name="UID"		value="">
						 PWD:		<input type="text" name="PWD"		value="">
						 DATABASE:	<input type="text" name="DATABASE"	value="">
					</form>
				</DIV>				
				
				<DIV> 
					<LABEL>Escolha a conexão</LABEL>
					<select name="conexao">
						<option value="mysql">My SQL</option>
						<option value="sql">SQL SERVER</option>
					</select>
				</DIV>
				
            </form>
			
        </section>
    </main>
	
<?php
	include('FOOTER.php');
?>