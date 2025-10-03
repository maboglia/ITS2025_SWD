package record;

import java.util.Objects;

public class PuntoOld {

	private final int x;
	private final int y;
	
	public PuntoOld(int x, int y) {
		super();
		this.x = x;
		this.y = y;
	}
	public int getX() {
		return x;
	}
	public int getY() {
		return y;
	}
	@Override
	public String toString() {
		return "PuntoOld [x=" + x + ", y=" + y + "]";
	}
	@Override
	public int hashCode() {
		return Objects.hash(x, y);
	}
	@Override
	public boolean equals(Object obj) {
		if (this == obj)
			return true;
		if (obj == null)
			return false;
		if (getClass() != obj.getClass())
			return false;
		PuntoOld other = (PuntoOld) obj;
		return x == other.x && y == other.y;
	}
	
	
	
}
