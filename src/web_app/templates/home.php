<div style = "text-align:center">
 	<h4>
		<?=$values["name"]["name"]?>
	</h4>
	<img src = "<?=$values["image"]?>" style = "width:100px"/> 
</div>

<table>
	<tr>
		<td>
			<table>
				<tr>
					<td>
						Traits
					</td>
				</tr>
				<?php
				foreach($values["predicted"] as $key=>$value)
				{
					echo "<tr>";
						echo "<td>";
							echo $key;
						echo "</td>";
					echo "</tr>";
				}
				?>
			</table>
				
		</td>

		<td>
			Predicted
		</td>

		<td>
			Actual if any
		</td>
		
		<td>
			Error
		</td>
	</tr>
</table>
	
